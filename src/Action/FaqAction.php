<?php


namespace NtSchool\Action;


use Psr\Http\Message\ServerRequestInterface;

class FaqAction
{
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->renderer->make('faq',[
            'title'=>'PetShop FAQ',
            'pageName'=> 'FAQ',
            'url' => '#',
            'labelForUrl'=>'Pages'
        ]);
    }
}