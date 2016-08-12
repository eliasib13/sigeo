<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questions';

    /**
     * Unique identifier
     *
     * @var string
     */
    protected $uuid;

    /**
     * Wording of the question
     *
     * @var string
     */
    protected $wording;

    /**
     * Possible answers for this question
     *
     * @return Answer[]
     */
    public function answers() {
        return $this->hasMany('Answer', 'answer_id');
    }

    /**
     * Exam ID
     *
     * @var integer
     */
    protected $examId;

    /**
     * Score of this question
     *
     * @var float
     */
    protected $score;

}
