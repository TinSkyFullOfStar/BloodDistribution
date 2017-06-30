<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2017/6/28
 * Time: 15:09
 */

namespace App\Http\Controllers\Blood;


use App\Http\Controllers\Controller;
use App\Model\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function getAll(Request $request){
        $input = $request->except('_token');

        if ($request->isMethod('post') && count($input) > 0){
            $param = [];
            foreach ($input as $key => $value)
                if ( $value != null )
                    $param[$key] = $value;

            $contents = DB::table('messages')
                ->join('message_types', 'message_types.id', '=', 'messages.type_id')
                ->join('message_statuses', 'message_statuses.id', '=', 'messages.status_id')
                ->join('admins', 'admins.id', '=', 'messages.status_id')
                ->join('media', 'media.id', '=', 'messages.media_id')
                ->select('messages.*', 'message_types.type', 'message_statuses.status','admins.username','media.media')
                ->where($param)
                ->orderBy('id', 'desc')
                ->paginate(5);
        }else
            $contents = DB::table('messages')
                ->join('message_types', 'message_types.id', '=', 'messages.type_id')
                ->join('message_statuses', 'message_statuses.id', '=', 'messages.status_id')
                ->join('admins', 'admins.id', '=', 'messages.status_id')
                ->join('media', 'media.id', '=', 'messages.media_id')
                ->select('messages.*', 'message_types.type', 'message_statuses.status','admins.username','media.media')
                ->orderBy('id', 'desc')
                ->paginate(5);
        return view('check.check',['contents'=>$contents]);
    }
}