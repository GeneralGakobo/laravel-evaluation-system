<?php

use Illuminate\Support\Facades\Route;
use App\Models\Session;
use App\Models\School;
use App\Models\Program;
use App\Models\Student;
use App\Models\Department;
use App\Models\Lecturer;
use App\Models\Unit;
use App\Models\competency;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\CompetenciesController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionnaireController;
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
    return view('dashboard.dashboard');
});

Route::get('regsession', [DashboardController::class, 'viewsession'])->name('dashboard.regsession');
Route::get('schools', [DashboardController::class, 'viewschool'])->name('dashboard.schools');
Route::get('departments', [DashboardController::class, 'viewdepartment'])->name('dashboard.departments');
Route::get('programs', [DashboardController::class, 'viewprogram'])->name('dashboard.programs');
Route::get('add_student', [StudentController::class, 'add_student'])->name('student.add_student');
Route::get('view_student', [StudentController::class, 'view_student'])->name('student.view_student');
Route::get('add_lecturer', [LecturerController::class, 'add_lecturer'])->name('lecturer.add_lecturer');
Route::get('view_lecturer', [LecturerController::class, 'view_lecturer'])->name('lecturer.view_lecturer');
Route::get('add_course', [CourseController::class, 'add_course'])->name('courses.add_course');
Route::get('view_course', [CourseController::class, 'view_course'])->name('courses.view_course');
Route::get('forms', [DashboardController::class, 'forms'])->name('dashboard.forms');
Route::get('index', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('session', [DashboardController::class, 'session'])->name('dashboard.session');
Route::post('school', [DashboardController::class, 'school'])->name('dashboard.school');
Route::post('department', [DashboardController::class, 'department'])->name('dashboard.department');
Route::post('program', [DashboardController::class, 'program'])->name('dashboard.program');
Route::post('student', [StudentController::class, 'student'])->name('student.student');
Route::post('lecturer', [LecturerController::class, 'lecturer'])->name('lecturer.lecturer');
Route::post('course', [CourseController::class, 'course'])->name('courses.course');
Route::get('sessionview', [DashboardController::class, 'sessionview'])->name('dashboard.sessionview');
Route::get('delete_session/{id}', [DashboardController::class, 'delete_session']);
Route::get('edit_session/{id}', [DashboardController::class, 'edit_session'])->name('dashboard.edit_session');
Route::post('edit_session', [DashboardController::class, 'update'])->name('dashboard.update');
Route::get('search_session', [SearchController::class, 'search_session'])->name('dashboard.search_session');

// ---------------------Units Routes---------------------------

Route::get('add_unit', [UnitsController::class, 'view_unit'])->name('units.add_unit');
// Route::get('view_unit', [UnitsController::class, 'view_unit'])->name('units.view_unit');
Route::post('unit', [UnitsController::class, 'unit'])->name('units.unit');
Route::get('delete_unit/{id}', [UnitsController::class, 'delete_unit']);


// ---------------------Competencies Routes---------------------------

Route::get('add_competency', [CompetenciesController::class, 'add_competency'])->name('competency.add_competency');
Route::get('view_competency', [CompetenciesController::class, 'view_competency'])->name('competency.view_competency');
Route::post('competency', [CompetenciesController::class, 'competency'])->name('competency.competency');
Route::get('delete_competency/{id}', [CompetenciesController::class, 'delete_competency']);


// ---------------------Answer Routes---------------------------
Route::get('add_answer', [AnswerController::class, 'view_answer'])->name('answer.answer');
Route::post('answer', [AnswerController::class, 'answer'])->name('dashboard.answer');
Route::get('delete_answer/{id}', [AnswerController::class, 'delete_answer']);


// ---------------------Questionnaire Routes---------------------------

Route::get('add_questionnaire', [QuestionnaireController::class, 'add_questionnaire'])->name('questionnaires.add_questionnaire');
// Route::get('view_unit', [UnitsController::class, 'view_unit'])->name('units.view_unit');
Route::post('questionnaire', [QuestionnaireController::class, 'questionnaire'])->name('questionnaires.questionnaire');
//Route::get('delete_unit/{id}', [UnitsController::class, 'delete_unit']);