<?php


require_once 'GuildMembers.php';

// instance of GuildMember
$guildMember1 = new GuildMembers("Joe", 100, 100, "Elf", "Warrior", "Captain");
$guildMember2 = new GuildMembers("Lara", 80, 100, "Human", "Mage", "Scholar");
$guildMember3 = new GuildMembers("Holly", 70, 100, "elf", "mage");

//  information about the guild members
echo $guildMember1->getGuildMemberInfo() . "\n";
echo $guildMember2->getGuildMemberInfo() . "\n";
echo $guildMember3->getGuildMemberInfo() . "\n";
