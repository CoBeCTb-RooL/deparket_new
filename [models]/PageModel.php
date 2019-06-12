<?php
class Page extends Entity2
{
	const ESSENCE = 'pages';

	CONST LIST_ORDER = 'idx';


	function get($id)
	{
		global $CORE;

		return parent::adapt(__CLASS__, (Entity2::get(self::ESSENCE, $id, Entity2::TYPE_ELEMENTS, $CORE->lang->code)));
	}


    function getChildren($pid, $limit, $additionalClauses, $order = self::LIST_ORDER, $lvl=0)
    {
        $params = array(
            'essenceCode'=>self::ESSENCE,
            'pid'=>$pid,
            'limit'=>$limit,
            'type'=>Entity2::TYPE_ELEMENTS,
            'order'=>$order,
            'lang'=>$CORE->lang,
            'additionalClauses'=>'',
            'activeOnly'=>true,
        );

        $entities = Entity2::getList($params);
        foreach($entities as $key=>$val)
        {
//            echo '<div style="margin: 0 0 0 '.($lvl*20).'px">
//                '.$val->attrs['name'].'
//            </div>';
            $val->subs = self::getChildren($val->id, $limit, $additionalClauses, $order, $lvl+1);
//            vd($val->attrs['name']);
//            echo '<hr>';
//            vd(count($val->subs));
//            echo '<hr>';echo '<hr>';echo '<hr>';
            $ret[] = parent::adapt(__CLASS__, $val);
        }

        return $ret;
    }




	#	переопределение метода с учётом поля link сущности pages
	function url($module, $lang)
	{
		global $CORE;
		$lang = $lang ? $lang : $CORE->lang->code;
		$link = $this->attrs['link'] ? str_replace('%LANG%', $lang, $this->attrs['link']) : Entity2::url($module, $lang);
		return $link;
	}




	function getTree($id)
	{
		$p = Page::get($id);
		if(!$p)
			return;

		$arr[$id] = $p;
		$pid = $p->pid;
		while($pid)
		{
			$page = Page::get($pid);
			$arr[$page->id] = $page;
			$pid=$page->pid;
		}

		return array_reverse($arr, true);
	}


}
?>