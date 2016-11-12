<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AttemptAnswer extends Model {

	/**
     * Name of the table
     *
     * @var string
     */
    protected $table = 'attempt_answers';

    /**
     * Unique identifier
     *
     * @var string
     */
    protected $uuid;

    /**
     * Attempt's answer
     *
     * @var integer
     */
    protected $attemptId;

    /**
     * Question
     *
     * @var integer
     */
    protected $questionId;

    /**
     * Answers selected for this attempt answer
     *
     * @return Answer[]
     */
    public function answers() {
        return $this->belongsToMany('App\Answer', 'attempt_answers_answers', 'attempt_id');
    }

    /**
     * Answer in case of free writing question
     *
     * @var string
     */
    protected $text;

}
