<?php

require_once 'Adventurer.php'; // include the Adventurer class here

class GuildMembers extends Adventurer
{
    public $name;
    public $guildRank;
    public function __construct($name, $guildRank, $health, $race, $class)
    {
        parent::__construct($health, $race, $class);
        $this->name = $name;
        $this->guildRank = $guildRank;
    }
    public function getGuildMemberinfo()
    {
        return "Guild Member: " . $this->name . " (" . $this->guildRank . ") " . $this->greet();
    }
};
