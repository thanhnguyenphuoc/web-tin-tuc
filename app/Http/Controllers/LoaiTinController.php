<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;
class LoaiTinController extends Controller
{
    public function getDanhSach(){
        $loaitin = LoaiTin::all();
        return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);
    }
    public function getThem(){
        $theloai = TheLoai::all();
        return view('admin.loaitin.them',['theloai'=>$theloai]);
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
        [
            'TheLoai' => 'required',
            'Ten' => 'required|unique:LoaiTin,Ten|min:3|max:100'
        ],
        [
            'TheLoai.required' => 'Vui lòng chọn Thể Loại!',
            'Ten.required' => 'Bạn chưa nhập tên Loại Tin!',
            'Ten.unique' => 'Tên Loại Tin đã tồn tại, vui lòng nhập tên khác!',
            'Ten.min' => 'Tên Loại Tin gồm ít nhất 3 ký tự!',
            'Ten.max' => 'Tên Loại Tin gồm tối đa 100 ký tự!'
        ]);
        $loaitin = new LoaiTin;
        $loaitin->idTheLoai = $request->TheLoai;
        $loaitin->Ten = $request->Ten;
        $loaitin->TenKhongDau = changeTitle($request->Ten);
        $loaitin->save();

        return redirect('admin/loaitin/them')->with('thongbao','Thêm Loại Tin thành công!');

        
    }
    public function getSua($id){
        $theloai = TheLoai::all();
        $loaitin = LoaiTin::find($id);
        return view('admin.loaitin.sua',['loaitin'=>$loaitin],['theloai'=>$theloai]);
    }
    public function postSua(Request $request,$id){
        $this->validate($request,
        [
            'TheLoai' => 'required',
            'Ten' => 'required|unique:LoaiTin,Ten|min:3|max:100'
        ],
        [
            'TheLoai.required' => 'Vui lòng chọn Thể Loại!',
            'Ten.required' => 'Bạn chưa nhập tên Loại Tin!',
            'Ten.unique' => 'Tên Loại Tin đã tồn tại, vui lòng nhập tên khác!',
            'Ten.min' => 'Tên Loại Tin gồm ít nhất 3 ký tự!',
            'Ten.max' => 'Tên Loại Tin gồm tối đa 100 ký tự!'
        ]);
        $loaitin = LoaiTin::find($id);
        $loaitin->idTheLoai = $request->TheLoai;
        $loaitin->Ten = $request->Ten;
        $loaitin->TenKhongDau = changeTitle($request->Ten);
        $loaitin->save();
        
        return redirect('admin/loaitin/sua/'.$id)->with('thongbao','Bạn đã sửa thành công');

    }
    public function getXoa($id){
        $loaitin = LoaiTin::find($id);
        $loaitin->delete();
        return redirect('admin/loaitin/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
