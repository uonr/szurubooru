<?php
class TokenEntity extends AbstractEntity implements IValidatable
{
	protected $userId;
	protected $token;
	protected $used;
	protected $expires;

	public function validate()
	{
		//todo
	}

	public function getText()
	{
		return $this->token;
	}

	public function setText($tokenText)
	{
		$this->token = $tokenText;
	}

	public function isUsed()
	{
		return $this->used;
	}

	public function setUsed($used)
	{
		$this->used = $used;
	}

	public function getExpirationDate()
	{
		return $this->expires;
	}

	public function setExpirationDate($time)
	{
		$this->expires = $time;
	}

	public function getUser()
	{
		return UserModel::findById($this->userId);
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function setUser($user)
	{
		$this->userId = $user ? $user->getId() : null;
	}
}
