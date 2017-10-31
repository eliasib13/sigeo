<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Exam extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exams';

    /**
     * Unique identifier
     *
     * @var string
     */
    protected $uuid;

    /**
     * Name of the exam
     *
     * @var string
     */
    protected $name;



    /**
     * User who created the exam
     *
     * return User
     */
    public function creator() {
        return $this->belongsTo('App\User', 'creatorId');
    }

    /**
     * ID of creator
     */
    protected $creatorId;

    /**
     * Questions of the exam
     *
     * @return Question[]
     */
    public function questions() {
        return $this->hasMany('App\Question', 'examId');
    }

    public function rooms() {
        return $this->hasMany('App\Room', 'examId');
    }

    /**
     * Needed score to pass the exam
     *
     * @var float
     */
    protected $passingScore;

}
