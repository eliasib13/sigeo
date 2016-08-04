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

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        /**
         * Attach to the 'creating' Model Event to provide a UUID
         * for the `id` field (provided by $model->getKeyName())
         */
        static::creating(function ($model) {
            $model->uuid = (string) Uuid::generate();
        });
    }

}
