<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Post;
use App\Term;
use Session;
class TestController extends Controller{
	public function db_pluck(Request $request){
		$terms = Term::pluck('term_name')->toArray();
		var_dump(implode(',',$terms));
	}
    public function setRandomName(Request $request){
        $benhs = ['viêm tuyến tiền liệt','u nang tuyến tiền liệt','tăng sinh tuyến tiền liệt','phì đại tuyến tiền liệt','rối loạn chức năng sinh dục','liệt dương','rối loạn cương dương','xuất tinh sớm','dài bao quy đầu','viêm nhiễm hệ thống sinh dục','viêm quy đầu','viêm bàng quang','viêm niệu đạo','viêm tinh hoàn','vô sinh nam','tinh trùng ít','xuất tinh ra máu','vô tinh','tinh trùng yếu','sùi mào gà','giang mai','bệnh lậu','mụn rộp sinh dục','yếu sinh lý'];
        $numbers = [0,1,2,3,4,5,6,7,8,9];
        $names = [
            'An','Anh','Bách','Bảo','Công','Cường','Đức','Dũng','Dương','Đạt','Duy','Gia','Hải','Hiếu','Hoàng','Huy','Hùng','Khải','Khang','Khánh','Khoa','Khôi','Kiên','Lâm','Long','Lộc','Minh','Nam','Nghĩa','Ngọc','Nguyên','Nhân','Phi','Phong','Phúc','Quân','Quang','Quốc','Tâm','Thái','Thành','Thiên','Thịnh','Trung','Tuất','Tùng','Sơn','Việt','Vinh','Uy'];
        $phones = ['098','097','096','0169','0168','0167','0166','0165','0164','0163','0162','091','094','0123','0124','0125','0127','0129','090','093','0120','0121','0122','0126','0128'];
        
        $html = '<table>';
        $name_rands = array_rand($names,9);
        foreach ($name_rands as $key => $value) {
            $phone_start_rands = array_rand($phones,1);
            $phone_end_rands = implode('',array_rand($numbers,3));
            $benh_rands = array_rand($benhs,1);
            $html = $html.'<tr>
                    <td>Anh '.$names[$name_rands[$key]].'</td>
                    <td>: '.$phones[$phone_start_rands].'****'.$phone_end_rands.' </td>
                    <td>: '.$benhs[$benh_rands].'</td>
                </tr>';
        }
        $html = $html.'</table>';
        Session::put('random_names',$html);
        return 'oke';
    }
    // reset visit_tuvan - visit_dathen
    public static function resetVisit(Request $request){
        $setting = Setting::first();
        $setting->web_tuvan =  200;
        $setting->web_dathen =  19;
        $setting->save();
        return '0oe';
    } 
}