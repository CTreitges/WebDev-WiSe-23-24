<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $spaltenbearbeiten = [
            'Spalte'                => 'required',
            'Spaltenbeschreibung'   => 'required',
            'Sortid'                => 'numeric',
        ];

    public $spaltenbearbeiten_errors = [
        'Spalte' => [
            'required' => 'Bitte geben Sie eine Spaltenbezeichnung an.'],
        'Spaltenbeschreibung' => [
            'required' => 'Bitte geben Sie eine Spaltenbeschreibung an.'],
        'Sortid' => [
            'numeric' => 'Bitte geben Sie eine Zahl ein.'],
    ];
}
