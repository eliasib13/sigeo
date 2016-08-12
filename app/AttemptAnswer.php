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
     * Answers selected for this attempt answer
     *
     * @return Answer[]
     */
    public function answers() {
        return $this->hasMany('Answer', 'answer_id');
    }

    /**
     * Answer in case of free writing question
     *
     * @var string
     */
    protected $text;

}
