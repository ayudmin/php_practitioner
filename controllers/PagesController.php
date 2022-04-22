<?php


class PagesController

{

    public function home()

    {

    
        return view('index', ['users' => $users]);


    }

    public function about()

    {
        $company = 'Kulusawa';

        return view('about',['company' => $company]);

    }

    public function contact()

    {
        $text = 'You will not regret';

        return view('contact', ['words' => $text]);

    }
    
    
}