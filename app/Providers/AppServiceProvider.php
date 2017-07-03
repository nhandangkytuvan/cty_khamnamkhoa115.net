<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Setting;
use View;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        View::share('setting',Setting::first());
        $banner_benhs = [
            30=>'benh-lau.png',
            13=>'dai-bao-quy-dau.png',
            29=>'giang mai.png',
            23=>'it-tinh-trung.png',
            14=>'keo-dai-duong-vat.png',
            8=>'liet-duong.png',
            6=>'phi-dai-tuyen-tien-liet.png',
            9=>'roi-loan-cuong-duong.png',
            28=>'sui mao ga.png',
            16=>'tang-kich-thuoc-duong-vat.png',
            5=>'tang-sinh-tuyen-tien-liet.png',
            15=>'thu-thuat-hep-bao-quy-dau.png',
            26=>'tinh-trung-yeu.png',
            4=>'u-nang-tuyen-tien-liet.png',
            19=>'viem-bang-quang.png',
            20=>'viem-nieu-dao.png',
            18=>'viem-quy-dau.png',
            21=>'viem-tinh-hoan.png',
            3=>'viem-tuyen-tien-liet.png',
            24=>'xuat-tinh-ra-mau.png',
            10=>'xuat-tinh-som.png',
            35=>'yeu-sinh-ly.png',
            31=>'MUN SINH DUC.png',
            25=>'vo-tinh.png',
        ];
        View::share('banner_benhs',$banner_benhs);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        //
    }
}
