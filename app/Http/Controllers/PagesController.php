<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\Slide;
use App\LoaiTin;
use App\TinTuc;
use App\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    function __construct()
    {
        $theloai = TheLoai::all();
        $slide = Slide::all();
        view()->share('theloai',$theloai);
        view()->share('slide',$slide);
       
    }
    function trangchu()
    {
        
        return view('pages.trangchu');
    }
    function lienhe()
    {
        return view('pages.lienhe');
    }
    function loaitin($id)
    {
        $loaitin = LoaiTin::find($id);
        $tintuc = TinTuc::where('idLoaiTin',$id)->paginate(5);
        return view('pages.loaitin',['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
    }
    function tintuc($id)
    {
        $tintuc = TinTuc::find($id);
        $tinoibat = TinTuc::where('NoiBat',1)->take(4)->get();
        $tinlienquan = TinTuc::where('idLoaiTin',$tintuc->idLoaiTin)->take(4)->get();
        return view('pages.tintuc',['tintuc'=>$tintuc,'tinoibat'=>$tinoibat,'tinlienquan'=>$tinlienquan]);
    }
    function getdangnhap()
    {
        return view('pages.dangnhap');
    }
    function postdangnhap(Request $request)
    {
        $this->validate($request,
        [
            'email'=>'required',
            'password'=>'required|min:3|max:32'
        ],[
            'email.required' => 'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=> 'Password không được nhỏ hơn 3 ký tự',
            'password.max' =>'Password không được lớn hơn 32 ký tự'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('trangchu');
        }
        else{
            return redirect('dangnhap')->with('thongbao','Đăng nhập Không thành công');
        }
        
    }
    function getDangxuat(){
        Auth::logout();
        return redirect('trangchu');
    }
    function getNguoiDung()
    {
        if(Auth::check())
            return view('pages.nguoidung',['nguoidung' => Auth::user()]);
        else
            return redirect('dangnhap')->with('thongbao','Bạn chưa Đăng Nhập!');
    }
    function postNguoidung(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required|min:3',
            
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng phải co ít nhất 3 ký tự'
            
        ]);
        $user = Auth::user();
        $user->name = $request->name;

        if($request->changePassword == 'on')
        {
            $this->validate($request,
            [
                'password'=>'required|min:3|max:32',
                'passwordAgain'=>'required|same:password'
            ],[
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Bạn mật khẩu ít nhât 3 ký tự',
                'password.max' => 'Bạn mật khẩu tối đa 32 ký tự',
                'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same' => 'Bạn nhập mật khẩu chưa khớp'
            ]);
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect('nguoidung')->with('thongbao','Bạn đã sửa thành công');
    }
    function getDangKy()
    {
        return view("pages.dangky");
    }
    function postDangKy(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:3|max:32',
            'passwordAgain'=>'required|same:password'
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng phải co ít nhất 3 ký tự',
            'email.required' => 'Bạn chưa nhập tên người dùng',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Bạn mật khẩu ít nhât 3 ký tự',
            'password.max' => 'Bạn mật khẩu tối đa 32 ký tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Bạn nhập mật khẩu chưa khớp',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->quyen = 0;
        $user->save();
        return redirect('dangky')->with('thongbao','Chúc mừng bạn đã đăng ký thành công');
    }
    function timkiem(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $tintuc = TinTuc::where('TieuDe','like','%$tukhoa%')->orwhere('TomTat','like',"%$tukhoa%")
        ->orwhere('NoiDung','like',"%$tukhoa%")->take(30)->paginate(5);
        return view('pages.timkiem',['tintuc'=>$tintuc,'tukhoa'=>$tukhoa]);
    }
    function gioithieu()
    {
        return view("pages.gioithieu");
    }
}
