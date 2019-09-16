<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsEnterpriseUser
{
    /**
     * @var string
     */
    protected $enterpriseId;
    /**
     * @var string
     */
    protected $enterpriseName;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var bool
     */
    protected $isAdmin;
    /**
     * @var bool
     */
    protected $isOwner;
    /**
     * @var string[]
     */
    protected $teams;

    /**
     * @return string|null
     */
    public function getEnterpriseId(): ?string
    {
        return $this->enterpriseId;
    }

    /**
     * @param string|null $enterpriseId
     *
     * @return self
     */
    public function setEnterpriseId(?string $enterpriseId): self
    {
        $this->enterpriseId = $enterpriseId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEnterpriseName(): ?string
    {
        return $this->enterpriseName;
    }

    /**
     * @param string|null $enterpriseName
     *
     * @return self
     */
    public function setEnterpriseName(?string $enterpriseName): self
    {
        $this->enterpriseName = $enterpriseName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    /**
     * @param bool|null $isAdmin
     *
     * @return self
     */
    public function setIsAdmin(?bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsOwner(): ?bool
    {
        return $this->isOwner;
    }

    /**
     * @param bool|null $isOwner
     *
     * @return self
     */
    public function setIsOwner(?bool $isOwner): self
    {
        $this->isOwner = $isOwner;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTeams(): ?array
    {
        return $this->teams;
    }

    /**
     * @param string[]|null $teams
     *
     * @return self
     */
    public function setTeams(?array $teams): self
    {
        $this->teams = $teams;

        return $this;
    }
}