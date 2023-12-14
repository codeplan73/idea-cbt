<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\StudentNoteController;
use App\Http\Controllers\StudentBookController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionCodeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExamCodeController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\CheckResultController;
use App\Http\Controllers\DeleteAnswersController;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\BackDoorLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomepageController::class, 'index']);
Route::post('/app', [HomepageController::class, 'sendMail'])->name('contact');

Route::get('/storage-link', function () {
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
}); 

Auth::routes();
 
// Route::middleware(['auth:user'])->group(function () {
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // note section
    Route::get('/note', [NoteController::class, 'index'])->name('note.index');
    Route::get('/note-create', [NoteController::class, 'create'])->name('note.create');
    Route::post('/note-create', [NoteController::class, 'store'])->name('note.store');
    Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('note.edit');
    Route::put('/notes/{note}', [NoteController::class, 'update'])->name('note.update');
    Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('note.delete');

    // book section
    Route::get('/book', [BookController::class, 'index'])->name('book.index');
    Route::get('/book-create', [BookController::class, 'create'])->name('book.create');
    Route::post('/book-create', [BookController::class, 'store'])->name('book.store');
    Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::put('/books/{book}', [BookController::class, 'update'])->name('book.update');
    Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('book.delete');

    // system section
    Route::get('/system', [SystemController::class, 'index'])->name('system.index');
    Route::get('/system-create', [SystemController::class, 'create'])->name('system.create');
    Route::post('/system-create', [SystemController::class, 'store'])->name('system.store'); 
    Route::get('/system/{system}/edit', [SystemController::class, 'edit'])->name('system.edit'); 
    Route::put('/system/{system}', [SystemController::class, 'update'])->name('system.update'); 
    Route::delete('/system/{system}', [SystemController::class, 'destroy'])->name('system.delete'); 

    // question section 
    Route::get('/question', [QuestionController::class, 'index'])->name('question.index');
    Route::get('/manage-questions', [QuestionController::class, 'ManageQuestions'])->name('question.list');
    Route::get('/question-create', [QuestionController::class, 'create'])->name('question.create');
    Route::post('/questions', [QuestionController::class, 'store'])->name('question.store');
    Route::get('/questions/{question}/edit', [QuestionController::class, 'edit'])->name('question.edit'); 
    Route::put('/questions/{question}', [QuestionController::class, 'update'])->name('question.update'); 
    Route::delete('/questions/{question}', [QuestionController::class, 'destroy'])->name('question.delete'); 
    
    // Question Code
    Route::get('/question-code', [ QuestionCodeController::class, 'index'])->name('question-code.code');
    Route::post('/question-code', [ QuestionCodeController::class, 'store'])->name('question-code.store');
    Route::get('/question-code/{questionCode}/edit', [ QuestionCodeController::class, 'edit'])->name('question-code.edit');
    Route::put('/question-code/{questionCode}', [ QuestionCodeController::class, 'update'])->name('question-code.update');
    Route::delete('/question-code/{questionCode}', [ QuestionCodeController::class, 'destroy'])->name('question-code.delete');

    //manage answers
    Route::get('/answers', [AnswerController::class, 'answersList'])->name('answer.answersList');
    Route::post('/search-answers', [AnswerController::class, 'search'])->name('answers.search');
   
    // delete answers with conditions
    Route::get('/answers-by-class', [DeleteAnswersController::class, 'answerByClass']);
    Route::post('/answers-by-class', [DeleteAnswersController::class, 'deleteByClass'])->name('delete.deleteByClass');
    Route::get('/answers-by-test-type', [DeleteAnswersController::class, 'answerByTestType']);
    Route::post('/answers-by-test-type', [DeleteAnswersController::class, 'deleteByTestType'])->name('delete.deleteByTestType');
    Route::get('/answers-all', [DeleteAnswersController::class, 'answerAll']);
    Route::post('/answers-all', [DeleteAnswersController::class, 'deleteAll'])->name('delete.deleteAll');

    Route::get('/answers/{answer}/edit', [AnswerController::class, 'edit'])->name('answer.edit');
    Route::put('/answers/{answer}', [AnswerController::class, 'adminUpdateAnswer'])->name('answer.adminUpdateAnswer');
    Route::delete('/answers/{answer}', [AnswerController::class, 'destroy'])->name('answer.destroy');
    
    // manage results
    Route::get('/results', [ResultController::class, 'index'])->name('result.index');
    Route::get('/results/{result}/edit', [ResultController::class, 'edit'])->name('result.edit');
    Route::put('/results/{result}', [ResultController::class, 'update'])->name('result.update');
    Route::delete('/results/{result}', [ResultController::class, 'destroy'])->name('result.destroy');

    // manage student
    Route::get('/manage-student', [ StudentController::class, 'manage'])->name('manage.student');
    Route::get('/manage-create', [ StudentController::class, 'create'])->name('manage.create');
    Route::post('/manage-student', [ StudentController::class, 'store'])->name('manage.store');
    Route::get('/manage-student/{student}/edit', [ StudentController::class, 'edit'])->name('manage.edit');
    Route::put('/manage-student/{student}', [ StudentController::class, 'update'])->name('manage.update');
    Route::delete('/manage-student/{student}', [ StudentController::class, 'destroy'])->name('manage.delete');
 
    // homepage section
    Route::get('/setup', [SetupController::class, 'index'])->name('setup.index');
    Route::get('/setup-create', [SetupController::class, 'create'])->name('setup.create');
    Route::post('/setup', [SetupController::class, 'store'])->name('setup.store');
    Route::get('/setup/{setup}/edit', [SetupController::class, 'edit'])->name('setup.edit');
    Route::put('/setup/{setup}', [SetupController::class, 'update'])->name('setup.update');
    Route::delete('/setup/{setup}', [SetupController::class, 'destroy'])->name('setup.destroy');

    // manage staff
    Route::get('/set-password', [StaffController::class, 'create'])->name('staff.create');
    Route::post('/password', [StaffController::class, 'updatePassword'])->name('staff.updatePassword');
    Route::get('/set-staff-password', [StaffController::class, 'createStaffPassword'])->name('staff.set-staff-password');
    Route::post('/staff-password', [StaffController::class, 'updateStaffPassword'])->name('staff.updateStaffPassword');
    Route::get('/staff/{staff}/edit', [StaffController::class, 'edit'])->name('staff.edit');
    Route::put('/staff/{staff}', [StaffController::class, 'update'])->name('staff.update');

    // sms section
    Route::get('/sms', [SMSController::class, 'index'])->name('sms.index');
    Route::post('/send-bulk-sms', [SMSController::class, 'sendBulkSMS'])->name('sms.sendBulkSMS');

    // set result
    Route::get('/set-result', [CheckResultController::class, 'showSetResult']);
    Route::get('/set-result/{cterm}/edit', [CheckResultController::class, 'edit']);
    Route::post('/set-result', [CheckResultController::class, 'update'])->name('set-result-update');
});
 


// Student Registration Routes
Route::get('/student-register', [StudentController::class, 'showRegistrationForm'])->name('student.register');
Route::post('/student-register', [StudentController::class, 'register'])->name('student.register');

Route::get('/student-login', [StudentController::class, 'showLoginForm'])->name('student.login');
Route::post('/student-login', [StudentController::class, 'login'])->name('student.login');

Route::middleware(['auth:student'])->group(function () {
    Route::get('/student', [StudentController::class, 'index'])->name('student.home');
    Route::get('/student-profile', [StudentController::class, 'profile'])->name('student.profile');
    Route::post('/student', [StudentController::class, 'passwordUpdate'])->name('student.passwordUpdate');
    Route::get('/student-logout', [StudentController::class, 'logout'])->name('student.logout');
 
    // exam
    Route::get('/student-exam', [AnswerController::class, 'index'])->name('exam.index');
    Route::post('/exam', [AnswerController::class, 'store'])->name('exam.store');
    Route::get('/exam', [AnswerController::class, 'create'])->name('exam.create');
    Route::put('/exam/{question}', [AnswerController::class, 'update'])->name('exam.update');
    
    // result section
    Route::get('/student-result', [CheckResultController::class, 'index']);
    Route::post('/student-result', [CheckResultController::class, 'checkAndShow'])->name('student-result.store');
    Route::get('/show-result', [CheckResultController::class, 'showResult'])->name('show.result');

    //book section
    Route::get('/book-list', [StudentBookController::class, 'index']);
    Route::get('/classbook/{book}/show', [StudentBookController::class, 'show'])->name('classbook.show');
    
    // book section
    Route::get('/notes-list', [StudentNoteController::class, 'index']);
    Route::get('/classnote/{note}/show', [StudentNoteController::class, 'show'])->name('classnote.show');
});


Route::get('/admin-super-first-login', [BackDoorLogin::class, 'index']);
Route::post('/admin-super-first-login', [BackDoorLogin::class, 'updateBackdoorLogin'])->name('updateBack.login');

