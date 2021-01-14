<?php


class AbstractHandler implements HandlerInterface
{
    private $nextHandler;

    public function setNext(HandlerInterface $handler)
    {
        $this->nextHandler=$handler;
        return $handler;
    }

    public function handle(Request $request)
    {
        if($this->nextHandler){
            return $this->nextHandler->handle($request);
        }
        else {return $request;}
    }
}