<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Models\Book;

class Create extends Component
{

    public Book $book;

    protected $rules = [
        'book.name' => 'required|string',
        'book.author' => 'required|string',
        'book.pages' => 'required|integer',
    ];

    public function render()
    {
        return view('livewire.book.create');
    }

    public function mount()
    {
        $this->book = new Book();
    }


    /*
    * validate only one field
    * */
   /* public function updatedBookName(){
        $this->validate();
    }*/


    /*
     * validate only one field or more
     * */
   /* public function updated( $field )
    {
        if( $field == 'book.name' )
        {
            $this->validade();
        }

        if( $field == 'book.pages' )
        {
            $this->validade();
        }
    }*/

    public function save()
    {
        $this->validate();
        book::create($this->book->toArray());
        session()->flash('message', 'Book registered successfully');
        return redirect()->route('books.index');
    }
}
