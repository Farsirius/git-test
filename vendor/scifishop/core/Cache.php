<?php

namespace scifishop;

class Cache 
{
    use TSingletone;
    
    public function setCache($key,$data,$seconds=3600) 
    {
        if ($seconds)
        {
            $content['data']=$data;
            $content['endtime']= time()+$seconds;
            if(file_put_contents(CACHE.'/'.md5($key).'.txt', serialize($content)))
            {
                return true;
            }
        }
        return false;
    }
    
    public function getCache($key) 
    {
        $file=CACHE.'/'.md5($key).'.txt';
        if (file_exists($file))
        {
            $content= unserialize(file_get_contents($file));
            if(time()<=$content['endtime'])
            {
                return $content['data'];
            }
            else
            {
                unlink($file);
            }
        }
        return false;
    }
    
    public function deleteCache($key) 
    {
        $file=CACHE.'/'.md5($key).'.txt';
        if (file_exists($file))
        {
            unlink($file);
        }
    }
}
