<?php

/**
 * Create Lorem ipsum text in Persian and English language
 * 
 * How to use ?
 * You can create Lorem ipsum text in php apps by call Lorem::create() method :
 *      Lorem::create(Lorem::LANG_FA , $count = 10 , Lorem::TYPE_WORD , $end = '...'); 
 *
 * @author     Saeed Moghadam zade <phpro.ir@gmail.com>
 * @copyright  2014-2014 PHPro.ir
 * @version    1.0
 * @link       http://phpro.ir/
 */

class Lorem {
   
    /**
     * create text by word count
     */  
    const TYPE_WORD = 1;
    
    /**
     * create text by character count
     */
    const TYPE_CHAR = 2;

    /**
     * create text by paragraph count
     */
    const TYPE_PARAGRAPH = 3;

    /**
     * set lorem ipsum language to English
     */
    const LANG_EN = 'en';

    /**
     * set lorem ipsum language to Farsi
     */
    const LANG_FA = 'fa';

    
    static private $en = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.  ';
    static private $fa = 'لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد. حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم است، بلکه شناخت این ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید، تنها لازمه آن بود.  ';

    
    /**
     * ساخت متن لورم ایپسوم 
     * 
     * 
     * <pre> echo Lorem::create();</pre>
     * 
     * @param Lorem::LANG_FA $lang انتخاب زبان 
     * @param int $count تعداد 
     * @param Lorem::TYPE_WORD $type نوع خروجی
     * @param String $end اضافه کردن این کاراکتر به انتهای منت خروجی
     * @return String
     */
    static function create($lang = self::LANG_FA, $count = 10, $type = self::TYPE_WORD, $end = '...') {
        $out = '';

        if ($lang == self::LANG_FA)
            $lorem = self::$fa;
        else
            $lorem = self::$en;

        switch ($type) {
            case self::TYPE_WORD :
                $words = explode(' ', $lorem);
                $i = 0;
                foreach ($words as $word) {
                    if ($i == $count)
                        break;
                    $out .= ' ' . $word;
                    $i++;
                }
                break;
            case self::TYPE_CHAR :
                for ($i = 0; $i <= $count; $i++) {
                    $out .= $lorem[$i];
                }
                break;
            case self::TYPE_PARAGRAPH:
                for ($i = 0; $i < $count; $i++) {
                    $out .= '<p>' . $lorem . '</p>';
                }
                break;
        }

        return $out . $end;
    }
}
