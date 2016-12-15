<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NotesTest extends TestCase
{

    public function test_notes_list()
    {
        Note::create(['note'=>'My frist Note']);
        Note::create(['note'=>'secont Note']);

        $this->visit('notes')
             ->see('My first note')
             ->see('secont note');
    }
}
