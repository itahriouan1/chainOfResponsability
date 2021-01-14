<?php


class Serveur3 extends AbstractHandler
{
    public function handle(Request $request)
    {
        if ($request->getId() >20){
            $request->setDone(true);
            $request->setHandler(self::class);
            return $request;
        }
        else {return parent::handle($request);}
    }
}