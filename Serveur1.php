<?php


class Serveur1 extends AbstractHandler
{
    public function handle(Request $request)
    {
        if($request->getId()%2==0){
            $request->setDone(true);
            $request->setHandler(self::class);
            return $request;
        }
        else {return parent::handle($request);}
    }

}