<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\Users;
use App\Role;
use App\Cart;
use App\ProductType;
use App\Image;
use App\Product;
class UserController extends Controller
{

    public function index() {
        $users = Users::all();
        $role = Role::all();
        return view('admin.user.index',['users'=>$users,'role'=>$role]);
     }

    public function create() {
        $users = Users::all();
        return view('admin.user.create',['users'=>$users]);
     }
     public function store() {
        $users = Users::all();
        return view('admin.user.create',['users'=>$users]);
     }

     public function edit($id) {
        $users = Users::find($id);
        $roles = Role::all();
        return view('admin.user.edit',['users'=>$users,'roles'=>$roles]);
     }
     
     public function update(UserRequest $request, $id)
     {
         $user = Users::find($id);
         $user->id_role=$request->id_role;
         $user->name=$request->name;
         $user->phone_number=$request->phone_number;
         $user->email=$request->email;
         $user->password=$request->password;
         $user->address=$request->address;
         $user->save();
         return redirect('admin/user/index')->with('messages','Sua thanh cong');
     }
     
     public function show($id) {
      $users = Users::where('id',$id)->get();
      return view('admin.user.show',['users'=>$users]);
     }

     public function destroy($id) {
        $users = Users::destroy($id);
        return redirect('admin.user.index')->with('thongbao','Xóa người dùng thành công');
    
     }
     public function search(Request $req)
     {
       $img = Image::all();
       $keyword = $req->keyword;
       $pro = Product::where('product_name','like','%'.$keyword.'%')->get();
       return view('customer.page.search',['product' => $pro,'img'=>$img,'keyword'=>$keyword]);
     }
 

    // public function store(Request $request)
    // {
    //     $messages = [
    //         'required' => 'Bắt buộc',
    //         'email' => 'Trường :attribute phải có định dạng email',
    //         'max' => 'Vượt quá độ dài cho phép',
    //         'min' => 'Quá ngắn',
    //         'numberic' => 'Chỉ gồm số'
    //     ];

    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|max:255',
    //         'email' => 'required|email',
    //         'phone_number' => 'required|numeric',
    //         'password' => 'required|min:5',
    //         'address' => 'required',

    //     ], $messages);

    //     if (!$validator->fails()) {
    //         $user = new User;
    //         $email = $request->email;
    //         $user->name = ucwords($request->name);
    //         $user->phone_number = $request->phone_number;
    //         $user->email = $request->email;
    //         $user->password = bcrypt($request->password);
    //         $user->address = $request->address;
    //         $user->save();
    //         $getID = User::select('id_user')->where('email', $email)->get();
    //         foreach ($getID as $id)
    //             $id_user = $id->id_user;

    //         $role_user = User::find($id_user);
    //         //Quyền hạn: admin
    //         $admin = Role::where('role_name', 'nhanvien')->get();
    //         foreach ($admin as $id_admin)
    //             $id_role_admin = $id_admin->id_role;
    //         $role_user->roles()->attach($id_role_admin);
            
    //         //Quyền hạn : customer
    //         $customer = Role::where('role_name', 'khachhang')->get();
    //         foreach ($customer as $id_customer)
    //             $id_role_customer = $id_customer->id_role;
    //         $role_user->roles()->attach($id_role_customer);

    //         $cart = new Cart;
    //         $cart->id_customer = $id_user;
    //         $cart->save();




    //         return redirect()->back()->with('message', 'Thêm mới thành công');
    //     } else {
    //         return redirect()->back()->withErrors($validator);

    //     }



    // }

    public function login()
    {
        return view('loginadmin');
    }

    public function checkLogin(Request $req)
        {
            if (Auth::attempt(['email' => $req->email, 
                'password' => $req->password, 
                'id_role' => 1]))
            {
                return redirect('home');
            }
            elseif (Auth::attempt(['email' => $req->email, 
                'password' => $req->password,
                'id_role' => 2]))
            {
                return redirect('admin/user/index');
            }
            else{
                return redirect('login')->with('login_errors','Đăng nhập không thành công, Vui lòng kiểm tra lại');
            }
        }



    public function register(){
        return view('register');
    }
    
    public function checkregister(Request $rq){
        $this->validate($rq,
        [
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'phone_number'=>'required',
            'address'=>'required',
            'password'=>'required|min:3|max:20',
            're_password'=>'required|same:password'
        ],
        [
            'name.required'=>'Vui lòng nhập tên của bạn',
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'email.unique'=>'Email này đã có người sử dụng',
            'phone_number.required'=>'Vui lòng nhập số điện thoại của bạn',
            'address.required'=>'Vui lòng nhập địa chỉ của bạn',
            'password.required'=>'Vui lòng nhập password',
            'password.min'=>'Password ít nhất 5 kí tự',
            'password.max'=>'Password tối đa 20 kí tự',
            're_password.required'=>'Vui lòng xác nhận lại password',
            're_password.same'=>'Password không giống nhau'
        ]
        );
        $users = new Users();
        $users->name = $rq->name;
        $users->email = $rq->email;
        $users->phone_number = $rq->phone_number;
        $users->address = $rq->address;
        $users->password = bcrypt($rq->password);
        $users->id_role = '1';
        $users->save();
        return redirect()->back()->with('thongbao', 'Tạo tài khoản thành công');
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }

//     public function register()
//     {
//         return view('register');
//     }

//     public function registerStore(Request $request)
//     {
//         $messages = [
//             'required' => 'Bắt buộc',
//             'email' => 'Trường :attribute phải có định dạng email',
//             'max' => 'Vượt quá độ dài cho phép',
//             'min' => 'Quá ngắn',
//             'numberic' => 'Chỉ gồm số'
//         ];

//         $validator = Validator::make($request->all(), [
//             'name' => 'required|max:255',
//             'email' => 'required|email',
//             'phone_number' => 'required|numeric',
//             'password' => 'required|min:5',
//             'address' => 'required',


//         ], $messages);

//         if (!$validator->fails()) {
//             $user = new User;
//             $email = $request->email;
//             $user->name = ucwords($request->name);
//             $user->phone_number = $request->phone_number;
//             $user->email = $request->email;
//             $user->password = bcrypt($request->password);
//             $user->address = $request->address;

//             if ($request->hasFile('image')) {
//                 $myFile = $request->file('image');
//                 $extension = $myFile->getClientOriginalExtension();
//                 $allowedfileExtension = ['jpg', 'png', 'jpeg'];
//                 $check=in_array($extension,$allowedfileExtension);
//                 if($check){
                    
//                     $name = $myFile->getClientOriginalName();
//                     $img_name = 'admin' . time() . '_' . $name;

//                     $filename = $myFile->storeAs('public/users', $img_name);
//                     $user->img_path = $img_name;
//                 }
//                 else{
//                     return redirect()->back()->with('message', 'File ảnh : .jpg/.png/.jepg');
//                 }

//             }

//             $user->save();

//             $getID = User::select('id_user')->where('email', $email)->get();
//             foreach ($getID as $id)
//                 $id_user = $id->id_user;

//             $role_user = User::find($id_user);
//             $customer = Role::where('role_name', 'khách hàng')->get();
//             foreach ($customer as $id)
//                 $id->id_role;


//             $role_user->roles()->attach($id->id_role);


//             $cart = new Cart;
//             $cart->id_customer = $id_user;
//             $cart->save();

//             return redirect()->route('user.login')->with('register', 'Đã đăng ký mới thành công');
//         }
//         else {
//             return redirect()->back()->withErrors($validator);

//         }





//     }
 }
