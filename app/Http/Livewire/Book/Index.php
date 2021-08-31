<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Book;

class Index extends Component
{
    use WithPagination;

    public bool $saved = false;


    public function render()
    {
        $books = Book::OrderBy('id','desc')->paginate();

        return view('livewire.book.index', [ "books" => $books ] );
    }

    public function deleteBook($id)
    {
        Book::whereId($id)->first()->delete();

       /* $this->books = Book::OrderBy('id','desc')->paginate();

        $this->books = $this->books->filter( function($item)  use ($id) {
            return $item->id != $id;
        });*/

        session()->flash('message', 'Book deleted successfully');
    }
}
