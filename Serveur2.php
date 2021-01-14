<?php


class Serveur2 extends AbstractHandler
{
    public function handle(Request $request)
    {
        if ($request->getId()<20){
            $request->setHandler(self::class);
            $request->setDone(true);
            return $request;
        }
        else {return parent::handle($request);}
    }

}