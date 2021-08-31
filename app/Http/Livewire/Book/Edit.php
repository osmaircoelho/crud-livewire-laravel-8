<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Edit extends Component
{
    public Book $book;

    public function render()
    {
        return view('livewire.book.edit');
    }

    protected array $rules = [
            'book.name' => 'required|string',
            'book.pages' => 'required|int',
            'book.author'=> 'required|string'
    ];

    //constructor every time a component is created
    public function mount($book)
    {
        $this->book = $book;
    }

    public function save()
    {
        $this->validate();
        $this->book->update( $this->book->toArray() );
        //$this->saved = true;
        session()->flash('message', 'Book name ' .$this->book->name .' and ID '.$this->book->id.' updated successfully!');
        return redirect()->route('books.index');
    }

    public function updated( $field)
    {
       /* dd($field);
        if ($field !== "saved"){
            $this->saved = false;
        }*/
    }
}
