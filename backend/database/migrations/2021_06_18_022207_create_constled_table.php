<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstledTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constled', function (Blueprint $table) {

            $table->id();
            $table->string('const_userid',10)->unique()->comment('ユーザー番号');
            $table->string('const_no',10)->unique()->comment('工事番号');
            $table->date('const_date')->comment('作成日付');
            $table->string('const_name',100)->comment('工事名');
            $table->string('const_name2',100)->comment('工事名2');
            $table->string('const_depcd',4)->comment('部門コード');
            $table->string('const_depname',30)->comment('部門名称');
            $table->string('const_depcd2',4)->comment('部門コード2');
            $table->string('const_depname2',30)->comment('部門名称2');
            $table->string('const_percd',4)->comment('担当者コード');
            $table->string('const_pername',20)->comment('担当者名');
            $table->string('const_percd2',4)->comment('担当者コード2');
            $table->string('const_pername2',20)->comment('担当者名2');
            $table->string('const_contcd',10)->comment('受注先コード');
            $table->string('const_contname',50)->comment('受注先名');
            $table->boolean('const_prostd')->comment('工事進行基準対象工事');
            $table->string('const_classcd1',4)->comment('工事区分1');
            $table->string('const_classname1',30)->comment('工事区分1名称');
            $table->string('const_classcd2',4)->comment('工事区分2');
            $table->string('const_classname2',30)->comment('工事区分2名称');
            $table->integer('const_kanmin')->comment('官民区分');
            $table->integer('const_motoshita')->comment('元下区分');
            $table->string('const_period',100)->comment('工期');
            $table->string('const_site',100)->comment('施工場所');
            $table->string('const_payterm',100)->comment('支払条件');
            $table->string('const_expdate',100)->comment('有効期限');
            $table->date('const_condate')->comment('契約日');
            $table->decimal('const_conamount',12,2)->comment('契約金額');
            $table->decimal('const_taxrate',12,2)->comment('消費税率');
            $table->decimal('const_contax',12,2)->comment('契約金額消費税');
            $table->date('const_startdate')->comment('着工日');
            $table->date('const_sccompdate')->comment('完成予定日');
            $table->date('const_devdate')->comment('引渡日');
            $table->date('const_compdate')->comment('工事完成日');
            $table->decimal('const_purbudget',12,2)->comment('仕入予算');
            $table->decimal('const_outbudget',12,2)->comment('外注予算');
            $table->decimal('const_labbudget',12,2)->comment('労務予算');
            $table->decimal('const_expbudget',12,2)->comment('経費予算');
            $table->decimal('const_puramount',12,2)->comment('仕入金額');
            $table->decimal('const_outamount',12,2)->comment('外注金額');
            $table->decimal('const_labamount',12,2)->comment('労務金額');
            $table->decimal('const_expamount',12,2)->comment('経費金額');
            $table->decimal('const_purorder',12,2)->comment('仕入発注金額');
            $table->decimal('const_outorder',12,2)->comment('外注発注金額');
            $table->decimal('const_laborder',12,2)->comment('労務発注金額');
            $table->decimal('const_exporder',12,2)->comment('経費発注金額');
            $table->decimal('const_managerate',12,2)->comment('一般管理費％');
            $table->decimal('const_managerfee',12,2)->comment('一般管理費');
            $table->decimal('const_exprate',12,2)->comment('予定利益率');
            $table->date('const_billdate')->comment('請求日');
            $table->decimal('const_billamount',12,2)->comment('請求金額');
            $table->date('const_depdate')->comment('入金日');
            $table->decimal('const_depamount',12,2)->comment('入金金額');
            $table->string('const_quotno',10)->comment('見積番号');
            $table->string('const_quotctl',12)->comment('見積管理番号');
            $table->date('const_quotdate')->comment('見積日付');
            $table->decimal('const_quotamount',12,2)->comment('見積金額');
            $table->string('const_memo1',100)->comment('メモ1');
            $table->string('const_memo2',100)->comment('メモ2');
            $table->string('const_memo3',100)->comment('メモ3');
            $table->string('const_memo4',100)->comment('メモ4');
            $table->string('const_memo5',100)->comment('メモ5');
            $table->string('const_memo6',100)->comment('メモ6');
            $table->string('const_memo7',100)->comment('メモ7');
            $table->string('const_memo8',100)->comment('メモ8');
            $table->string('const_memo9',100)->comment('メモ9');
            $table->string('const_memo10',100)->comment('メモ10');
            $table->char('const_voldate',7)->comment('出来高開始年月');
            $table->integer('const_vol01')->comment('出来高01');
            $table->integer('const_vol02')->comment('出来高02');
            $table->integer('const_vol03')->comment('出来高03');
            $table->integer('const_vol04')->comment('出来高04');
            $table->integer('const_vol05')->comment('出来高05');
            $table->integer('const_vol06')->comment('出来高06');
            $table->integer('const_vol07')->comment('出来高07');
            $table->integer('const_vol08')->comment('出来高08');
            $table->integer('const_vol09')->comment('出来高09');
            $table->integer('const_vol10')->comment('出来高10');
            $table->integer('const_vol11')->comment('出来高11');
            $table->integer('const_vol12')->comment('出来高12');
            $table->integer('const_budget01')->comment('予算01');
            $table->integer('const_budget02')->comment('予算02');
            $table->integer('const_budget03')->comment('予算03');
            $table->integer('const_budget04')->comment('予算04');
            $table->integer('const_budget05')->comment('予算05');
            $table->integer('const_budget06')->comment('予算06');
            $table->integer('const_budget07')->comment('予算07');
            $table->integer('const_budget08')->comment('予算08');
            $table->integer('const_budget09')->comment('予算09');
            $table->integer('const_budget10')->comment('予算10');
            $table->integer('const_budget11')->comment('予算11');
            $table->integer('const_budget12')->comment('予算12');
            $table->boolean('const_check0')->comment('チェック0');
            $table->boolean('const_check1')->comment('チェック1');
            $table->boolean('const_check2')->comment('チェック2');
            $table->boolean('const_check3')->comment('チェック3');
            $table->string('const_eaapccd',4)->comment('実行承認申請担当者コード');
            $table->date('const_eaadate')->comment('実行承認申請日付');
            $table->string('const_easetcd',3)->comment('実行承認設定コード');
            $table->string('const_eastucd',2)->comment('実行承認状態コード');
            $table->string('const_indaccflg',1)->comment('労災フラグ');
            $table->string('const_indacccls',3)->comment('労災区分');
            $table->decimal('const_indamount',12,2)->comment('前回労災出力金額');
            $table->date('const_inddate')->comment('前回労災出力日');
            $table->integer('const_indout')->comment('労災出力');
            $table->date('const_indcosdate')->comment('労災原価投入日');
            $table->string('const_buildno',20)->comment('建物番号');
            $table->string('const_buildname',80)->comment('建物名称');
            $table->dateTime('const_registdate')->comment('登録日');
            $table->dateTime('const_updatedate')->comment('更新日');
            $table->string('const_registuser',50)->comment('登録ユーザ');
            $table->string('const_updateuser',50)->comment('更新ユーザ');
            $table->boolean('const_deleteflg')->comment('削除フラグ');
            $table->string('const_terminalno',50)->comment('現在使用端末番号');
            $table->boolean('const_manageflg')->comment('工事台帳管理フラグ');
            $table->string('const_status',10)->comment('状況');
            $table->string('const_billcomm',100)->comment('請求コメント');
            $table->string('const_depcomm',100)->comment('入金コメント');
            $table->decimal('const_gross',12,2)->comment('粗利率');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constled');
    }
}
