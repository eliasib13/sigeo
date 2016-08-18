<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

	/**
     * Name of the table
     *
     * @var string
     */
    protected $table = 'rooms';

    /**
     * Unique identifier
     *
     * @var string
     */
    protected $uuid;

    /**
     * Name of the room
     *
     * @var string
     */
    protected $name;

    /**
     * ID of the room's creator
     *
     */
    protected $creatorId;

    /**
     * ID of the room's exam
     */
    protected $examId;

    /**
     * Invited users to the room
     *
     * @return User[]
     */
    public function invited() {
        return $this->hasMany('User', 'id');
    }

    /**
     * Date of room's opening
     *
     * @var DateTime
     */
    protected $openedAt;

    /**
     * Date of room's closing
     *
     * @var DateTime
     */
    protected $closedAt;

}
