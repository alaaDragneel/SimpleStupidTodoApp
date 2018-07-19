<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
	/**
	 * @{inheritDocs}
	 */
	protected $fillable = ['todo', 'completed'];

	/**
	 * @{inheritDocs}
	 */
	protected $casts = ['completed' => 'boolean'];

	public function compelete()
	{
		$this->update(['completed' => true]);
	}

	public function unCompelete()
	{
		$this->update(['completed' => false]);
	}

	public function isCompelete()
	{
		return $this->completed;
	}
}
