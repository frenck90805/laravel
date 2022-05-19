<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }

    /**register-start*/
    public function register(Request $request)
    {
        $data = new User;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->telephone = $request->telephone;
        $image =$request->image;
        if($image)//如果有上傳檔案執行下列程式
        {
            $imagename = time().'.'.$image->extension(); //時間函數再加上副檔名
            $request->image->move('file',$imagename);//圖片會存在public的底下，會自動生成一個file的資料夾
            $data->image = $imagename;
        }
        $data->save();  
        return redirect()->back()->with('status','恭喜你註冊成功');//回傳訊息
    }
    /**register-end*/

    /**Show-start*/
    public function show()
    {
        $data = User::all();
        return view('show',compact('data'));
    }
    /**Show-end*/

    /**Delete-start*/
    public function delete($user_id)
    {
        $data = User::find($user_id); //找出每筆user_id的資料
        $data->delete();              //並刪除
        return redirect()->back();
    }
    /**Delete-end*/

    /**Search-start*/
    public function search(Request $request)
    {
        $search = $request->search;//把前端搜尋的資料存在$search
        $data = User::where('username','Like',"%{$search}%")->orwhere('telephone','Like',"%{$search}%")->get();//去資料庫比對username、telephone欄位，然後取出
        return view('show',compact('data'));
    }
    /**Search-end*/

    /**Update_Show-start*/
    public function update_show($user_id)
    {
        $data = User::find($user_id);
        return view('update',compact('data'));
    }
    /**Update_Show-end*/

    /**Update-start*/
    public function update(Request $request,$user_id)
    {   
        $data = User::find($user_id);//找出特定user_id，並修改資料
        $data->username = $request->username;
        $data->telephone = $request->telephone;
        $image =$request->image;
        if($image)//如果有上傳檔案執行下列程式
        {
            $imagename = time().'.'.$image->extension(); //時間函數再加上副檔名
            $request->image->move('file',$imagename);//圖片會存在public的底下，會自動生成一個file的資料夾
            $data->image = $imagename;
        }
        $data->save();  
        return redirect()->back()->with('message','修改成功');
    }
    /**Update-end*/
}
