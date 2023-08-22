<?php

use App\Http\Controllers\ExcelImportController;
use App\Http\Controllers\RuleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('dg-team', function () {
    return view('dgTeam');
});
Route::get('district-governor', function () {
    return view('districtGovernor');
});
Route::get('coming-soon', function () {
    return view('comingSoon');
});
Route::get('international-president', function () {
    return view('presidentTalk');
});
Route::get('cabinet-nucleus', function () {
    return view('cabinetNucleus');
});
Route::get('cabinet-core', function () {
    return view('cabinetCore');
});
Route::get('region-chairpersons', function () {
    return view('regionChairpersons');
});
Route::get('zone-chairpersons', function () {
    return view('zoneChairpersons');
});
Route::get('our-founder', function () {
    return view('ourFounder');
});
Route::get('flag-salutation', function () {
    return view('flagSalutation');
});
Route::get('vision-mission', function () {
    return view('visionMission');
});
Route::get('downloads', function () {
    return view('downloads');
});
Route::get('points', function () {
    return view('points');
});

Route::get('verifyId', [VerifyController::class, 'index'])->name('verifyId');
Route::post('verify', [VerifyController::class, 'verify'])->name('verifyMember');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/update-profile',[userController::class, 'updateProfile']);
});
Route::group(['middleware' => ['role:superadmin|admin|president|secretary|treasurer', 'auth']], function () {
    Route::get('/import/excel', [ExcelImportController::class, 'showForm'])->name('import.excel');
    Route::get('/rules', [RuleController::class, 'viewRules'])->name('rules');
    Route::get('/getPartData', [RuleController::class, 'getPartData'])->name('get-part-data');
    Route::get('/getAccordionContent', [RuleController::class, 'getAccordionContent'])->name('getAccordionContent');
    Route::get('/create-rules', [RuleController::class, 'createRules'])->name('rules.create');
    Route::get('/edit-rules/{id}', [RuleController::class, 'editRule'])->name('rules.edit');
    Route::post('/add-rules', [RuleController::class, 'addRule'])->name('rules.add');
    Route::post('/update-rules', [RuleController::class, 'updateRule'])->name('rules.update');
    Route::post('/import/excel', [ExcelImportController::class, 'import'])->name('import.excel.process');
    Route::get('/support/duplicates', [UserController::class, 'duplicates'])->name('support.duplicates');
    Route::get('/editDuplicates/{id}', [UserController::class, 'editDuplicates'])->name('editDuplicates');
    Route::post('/editMember', [UserController::class, 'editMember'])->name('editMember');
    Route::prefix("help")->group(function() {
        Route::get('/tickets', [UserController::class, 'tickets'])->name('tickets');
        Route::post('/saveTicket', [UserController::class, 'saveTicket'])->name('saveTicket');
        Route::get('/departments', [UserController::class, 'departments'])->name('help.departments');
        Route::post('/editTicket', [UserController::class, 'editTicket'])->name('editTicket');
    });
    Route::get('viewTicket/{id}',[UserController::class,'viewTicket'])->name('viewTicket');
    Route::post('/addDepartments',[UserController::class, 'addDepartments']);
    Route::get('editDepartments/{id}',[userController::class,'editDepartments']);
    Route::post('updateDepartments/{id}',[userController::class,'updateDepartments']);
    Route::get('report/rules-view',[RuleController::class,'rulesView'])->name('report.rules_view');
    Route::get('report/previous',[RuleController::class,'previousView'])->name('report.previous');
    Route::get('report/sns',[RuleController::class,'snsList'])->name('report.sns');
    Route::get('report/claims',[RuleController::class,'claims'])->name('report.claims');
    Route::get('report/rulesPopup',[RuleController::class,'rulesPopup'])->name('report.rulesPopup');
    Route::get('report/claim-rule/{id}',[RuleController::class,'claimRule'])->name('report.claims_rule');
    Route::post('report/addClaim',[RuleController::class,'addClaim'])->name('report.addClaim');
    Route::post('report/snsSubmit',[RuleController::class,'snsSubmit'])->name('report.snsSubmit');

});
Route::group(['middleware' => ['role:superadmin|admin', 'auth']], function () {
    Route::prefix("cms")->group(function() {
        Route::get('/clubs', [UserController::class, 'clubsList'])->name('clubs');
        Route::get('/members', [UserController::class, 'memberList'])->name('members');
        Route::post('/edit-member', [UserController::class, 'updateMember'])->name('updateMember');
        Route::get('/clubs/{id}', [UserController::class, 'clubView'])->name('club.view');
        Route::get('/member/{id}', [UserController::class, 'memberView'])->name('member.view');
    });
});
Route::group(['middleware' => ['role:superadmin', 'auth']], function () {
    Route::prefix("election")->group(function() {
        Route::get('/dues', [UserController::class, 'electionDues'])->name('dues');
        Route::post('/add-to-dues',[UserController::class, 'addToDues'])->name('dues.add');
        Route::get('/delete-dues/{id}',[UserController::class, 'deleteDues'])->name('dues.delete');
        Route::get('/no-dues', [UserController::class, 'electionNoDues'])->name('nodues');
        Route::get('/credentials', [UserController::class, 'credentials'])->name('credentials');
        Route::get('/get-credentials/{club_id}', [UserController::class, 'getCredentials'])->name('getCredentials');
        Route::get('/get-members/{clubid}', [UserController::class, 'getClubMembers'])->name('club.members');
        Route::get('/deligates/{clubid}', [UserController::class, 'getDeligates'])->name('nodues.deligates');
        Route::get('/alternates/{clubid}', [UserController::class, 'getAlternates'])->name('nodues.alternates');
        Route::get('/delete-nodues/{id}',[UserController::class, 'deleteNoDues'])->name('nodues.delete');
        Route::post('/nodues-updates',[UserController::class, 'noDuesUpdates'])->name('nodues.updates');
        Route::get('/clubs',[UserController::class, 'electionClubs'])->name('election.clubs');
        Route::get('/get-certificate/{memberId}', [UserController::class, 'getNodueCertificate'])->name('nodues.certificate');
        Route::get('/get-certificate-pdf/{memberId}', [UserController::class, 'getNodueCertificatepdf'])->name('nodues.certificatePdf');
        Route::get('/get-credential-certificate/{id}', [UserController::class, 'getCredentialCertificate'])->name('getCredentialCertificate');
        Route::get('/credential-pdf/{memberId}', [UserController::class, 'getCredentialCertificatepdf'])->name('getCredentialCertificatepdf');
        Route::get('/delegates-submitted-report', [UserController::class, 'delegatesSubmittedReport'])->name('delegates-submitted-report');
        Route::get('/no-dues-issued-report', [UserController::class, 'noDuesIssuedReport'])->name('no-dues-issued-report');
        Route::get('/validDelegates/{clubid}', [UserController::class, 'getValidDelegates'])->name('validDelegates');
    });
});
Route::group(['middleware' => ['role:superadmin', 'auth']], function () {
    Route::prefix("designation")->group(function() {
        Route::get('/designation', [UserController::class, 'designation'])->name('designation');
        Route::post('/addDesignation',[UserController::class, 'addDesignation'])->name('addDesignation');
        Route::get('/deleteDesig/{id}',[UserController::class, 'deleteDesignation'])->name('designation.delete');
        Route::get('/editDesignation/{id}', [UserController::class, 'editDesignation'])->name('designation.view');
        Route::post('/updateDesignation', [UserController::class, 'updateDesignation'])->name('updateDesignation');
    });
});
Route::group(['middleware' => ['role:claimsadmin|superadmin', 'auth']], function () {
    Route::prefix("reports")->group(function() {
        Route::get('/first-approval',[RuleController::class, 'firstApproval'])->name('first-approval');
        Route::post('/update-claim-status',[RuleController::class, 'updateClaimStatus'])->name('update-cliam-status');
        Route::post('/update-partial-point',[RuleController::class, 'updatePartialPoint'])->name('update-partial-point');
        Route::get('/second-approval',[RuleController::class, 'secondApproval'])->name('second-approval');

    });
});
require __DIR__.'/auth.php';
