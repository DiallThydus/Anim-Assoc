<?php

namespace Core\Controller;

interface ControllerInterface
{
    public function __construct();
    public function index(): void;
    public function show(): void;
    public function create(): void;
    public function update(): void;
    public function delete(): void;
}