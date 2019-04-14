<?php
namespace structural\adapter\samples\sample2;

interface SocialAccountInterface {
    public function share(string $text): bool;
}