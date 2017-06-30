<?php

namespace App\Http\Controllers\Blood;
use App\Http\Controllers\Controller;
use App\Model\Message;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2017/6/28
 * Time: 9:51
 */
class BloodController extends Controller
{
    public function getAll(Request $request){
        $input = $request->except(['_token','page']);

        if ($request->isMethod('post') && count($input) > 0){
            $param = [];
            $date = null;
            $title = null;
            $contents = null;


            foreach ($input as $key => $value)
                if ( $value != null && $key != 'created_at')
                    $param[$key] = $value;
                else if ($key == 'created_at' && $value != null)
                    $date = $value;

            if ($date == null)
                    $contents = DB::table('messages')
                        ->join('message_types', 'message_types.id', '=', 'messages.type_id')
                        ->join('message_statuses', 'message_statuses.id', '=', 'messages.status_id')
                        ->join('admins', 'admins.id', '=', 'messages.status_id')
                        ->join('media', 'media.id', '=', 'messages.media_id')
                        ->select('messages.*', 'message_types.type', 'message_statuses.status','admins.username','media.media')
                        ->where($param)
                        ->orderBy('id', 'desc')
                        ->paginate(10);
            else
                $contents = DB::table('messages')
                    ->join('message_types', 'message_types.id', '=', 'messages.type_id')
                    ->join('message_statuses', 'message_statuses.id', '=', 'messages.status_id')
                    ->join('admins', 'admins.id', '=', 'messages.status_id')
                    ->join('media', 'media.id', '=', 'messages.media_id')
                    ->whereDate('messages.created_at',$date)
                    ->select('messages.*', 'message_types.type', 'message_statuses.status','admins.username','media.media')
                    ->orderBy('id', 'desc')
                    ->paginate(10);

        }else
            $contents = DB::table('messages')
                ->join('message_types', 'message_types.id', '=', 'messages.type_id')
                ->join('message_statuses', 'message_statuses.id', '=', 'messages.status_id')
                ->join('admins', 'admins.id', '=', 'messages.status_id')
                ->join('media', 'media.id', '=', 'messages.media_id')
                ->select('messages.*', 'message_types.type', 'message_statuses.status','admins.username','media.media')
                ->orderBy('id', 'desc')
                ->paginate(10);
        return view('manager.manager',['contents'=>$contents]);
    }

    public function delete(Request $request){
        $input = $request->all();
        $param = [];
        $count = 0;
        foreach ($input as $key => $value)
            if (preg_match_all('(\d+)',$value) == 1){
                $param[$count] = $value;
                $count++;
            }
        $row = Message::destroy($param);

        return redirect()->action('Blood\BloodController@getAll');
    }


    public function insert(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required|max:4096',
            'type_id' => 'required',
            'remarks' => 'max:255',
        ]);


        $message = null;
        $input = $request->except('_token');
//        $input['admin_id'] = $request->session()->get('id');
        $input['admin_id'] = 2;
        $input['media_id'] = 1;
        $input['status_id'] = 1;

        try {
            $message = Message::create($input);
        }catch (Exception $e){

        }

        if ($message != null)
            return redirect()->action('Blood\BloodController@getAll');
        else
            return view('apply.apply',['error' => '申请不成功']);
    }

    public function logout(){
        Auth::logout();
        return view('login.login');
    }

}