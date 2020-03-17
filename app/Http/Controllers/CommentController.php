<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\TinTuc;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function getXoa($id,$idTinTuc){
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/tintuc/sua/'.$idTinTuc)->with('thongbao','Bạn đã xóa thành công');
    }
    public function postComment($idComment, Request $request)
    {
        $this->validate($request,
        [
            'NoiDung' => 'required'
        ],
        [
            'NoiDung.required' => 'Bạn chưa nhập nội dung'
        ]);
        $tintuc = TinTuc::find($idComment);
        $comment = new Comment;
        $comment->idUser = Auth::user()->id;
        $comment->idTinTuc = $idComment;
        $comment->NoiDung = $request->NoiDung;
        $comment->save();

        return redirect("tintuc/$idComment/".$tintuc->TieuDeKhongDau.".html")->with('thongbao','Viết bình luận thành công');
    }

}
