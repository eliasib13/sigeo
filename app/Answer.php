<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Answer extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'answers';

    /**
     * Unique identifier
     *
     * @var string
     */
    protected $uuid;

    /**
     * Answer's text:
     * - Answer's statement (if test type)
     * - Term on the answer (if free answer type)
     *
     * @var string
     */
    protected $text;

    /**
     * True or false, in case of test type
     * Null in other case.
     *
     * @var boolean
     */
    protected $correct;

    /**
     * Question ID
     * @var int
     */
    protected $questionId;

}
