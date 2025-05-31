<?php include_once('settings.php'); date_default_timezone_set("$default_timezone");

// Pagination

function pagination($query,$per_page=4,$page=1,$url){   
    global $mysqli; 
    $query = "SELECT COUNT(*) as `num` FROM {$query}";
    $row = mysqli_fetch_array(mysqli_query($mysqli,$query));
    $total = $row['num'];
    $adjacents = "2"; 
     
    $prevlabel = "<i class='fas fa-arrow-left'></i>";
    $nextlabel = "<i class='fas fa-arrow-right'></i>";
	$lastlabel = "Last";
     
    $page = ($page == 0 ? 1 : $page);  
    $start = ($page - 1) * $per_page;                               
     
    $prev = $page - 1;                          
    $next = $page + 1;
     
    $lastpage = ceil($total/$per_page);
     
    $lpm1 = $lastpage - 1; // //last page minus 1
     
    $pagination = "";
    if($lastpage > 1){   
        $pagination .= "<nav style='text-decoration: none; font-size: 16px;' class='post-pagination' align='center' aria-label='Blog navigation'>
							<ul class='pagination justify-content-center'>";
        $pagination .= "";
             
            if ($page > 1) $pagination.= "<lii class='page-item'><a class='page-link' style='text-decoration: none; font-size: 16px; background: #f00;color: #fff; padding: 3px 6px 3px 6px; margin: 3px;; margin: 3px;' href='{$url}page={$prev}'>{$prevlabel}</a></lii>";
             
        if ($lastpage < 7 + ($adjacents * 2)){   
            for ($counter = 1; $counter <= $lastpage; $counter++){
                if ($counter == $page)
                    $pagination.= "<lii class='page-item active' style='text-decoration: none; font-size: 16px; background: #ccc;  padding: 3px 6px 3px 6px; margin: 3px;; margin: 3px;'><a class='page-link'><font color='black'>{$counter}</font></a></lii>";
                else
                    $pagination.= "<lii class='page-item'><a style='text-decoration: none; font-size: 16px; background: #f00;color: #fff; padding: 3px 6px 3px 6px; margin: 3px;' class='page-link' href='{$url}page={$counter}'>{$counter}</a></lii>";                    
            }
         
        } elseif($lastpage > 5 + ($adjacents * 2)){
             
            if($page < 1 + ($adjacents * 2)) {
                 
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++){
                    if ($counter == $page)
                        $pagination.= "<lii class='page-item active'><a class='page-link'>{$counter}</a></lii>";
                    else
                        $pagination.= "<lii class='page-item'><a style='text-decoration: none; font-size: 16px; background: #f00;color: #fff; padding: 3px 6px 3px 6px; margin: 3px;' class='page-link' href='{$url}page={$counter}'>{$counter}</a></lii>";                    
                }
                $pagination.= "<lii class='page-item'><span class='page-link'>...</span></lii>";
                $pagination.= "<lii class='page-item'><a class='page-link' href='{$url}page={$lpm1}'>{$lpm1}</a></lii>";
                $pagination.= "<lii class='page-item'><a class='page-link' href='{$url}page={$lastpage}'>{$lastpage}</a></lii>";  
                     
            } elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                 
                $pagination.= "<lii class='page-item'><a class='page-link' href='{$url}page=1'>1</a></lii>";
                $pagination.= "<lii class='page-item'><a class='page-link' href='{$url}page=2'>2</a></lii>";
                $pagination.= "<lii class='dot'>...</lii>";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                    if ($counter == $page)
                        $pagination.= "<lii class='page-item active'><a class='page-link'>{$counter}</a></lii>";
                    else
                        $pagination.= "<lii class='page-item'><a class='page-link' href='{$url}page={$counter}'>{$counter}</a></lii>";                    
                }
                $pagination.= "<lii class='page-item'><span class='page-link'>...</span></lii>";
                $pagination.= "<lii class='page-item'><a class='page-link' href='{$url}page={$lpm1}'>{$lpm1}</a></lii>";
                $pagination.= "<lii class='page-item'><a style='text-decoration: none; font-size: 16px; background: #f00;color: #fff; padding: 3px 6px 3px 6px; margin: 3px;' class='page-link' href='{$url}page={$lastpage}'>{$lastpage}</a></lii>";      
                 
            } else {
                 
                $pagination.= "<lii class='page-item'><a class='page-link' href='{$url}page=1'>1</a></lii>";
                $pagination.= "<lii class='page-item'><a class='page-link' href='{$url}page=2'>2</a></lii>";
                $pagination.= "<lii class='page-item'><span class='page-link'>...</span></lii>";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                    if ($counter == $page)
                        $pagination.= "<lii class='page-item active'><a class='page-link'>{$counter}</a></lii>";
                    else
                        $pagination.= "<lii class='page-item'><a class='page-link' href='{$url}page={$counter}'>{$counter}</a></lii>";                    
                }
            }
        }
         
            if ($page < $counter - 1) {
				$pagination.= "<lii class='page-item'><a class='page-link' style='text-decoration: none; font-size: 16px; background: #f00;color: #fff; padding: 3px 6px 3px 6px; margin: 3px;' href='{$url}page={$next}'>{$nextlabel}</a></lii>";
				$pagination.= "<lii class='page-item'><a style='text-decoration: none; font-size: 16px; background: #f00;color: #fff; padding: 3px 6px 3px 6px; margin: 3px;' class='page-link' href='{$url}page=$lastpage'>{$lastlabel}</a></lii>";
			}
         
        $pagination.= "</ul>
						</nav>";        
    }
     
    return $pagination;
}


date_default_timezone_set('Africa/Lagos'); 

// time ago function by khodex


function time_ago($date) {
    if (empty($date)) {
        return "No date provided";
    }
    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);
// check validity of date
    if (empty($unix_date)) {
        return "Bad date";
    }
// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "ago";
    } else {
        $difference = $unix_date - $now;
        $tense = "from now";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "s";
    }
    return "$difference $periods[$j] {$tense}";
}


function timeago($date) {
    if (empty($date)) {
        return "No date provided";
    }
    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);
// check validity of date
    if (empty($unix_date)) {
        return "Bad date";
    }
// is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "ago";
    } else {
        $difference = $unix_date - $now;
        $tense = "from now";
    }
    for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
        $difference /= $lengths[$j];
    }
    $difference = round($difference);
    if ($difference != 1) {
        $periods[$j].= "s";
    }
    return "$difference $periods[$j] {$tense}";
}

// Word Limit By Khodex

function khodex_word_limit($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

// Slug as ID by Khodex

function slug($text){ 

  // replace non letter or digits by -
  $text = preg_replace('~[^pLd]+~u', '-', $text);

  // trim
  $text = trim($text, '-');

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace('~[^-w]+~', '', $text);

  if (empty($text))
  {
    return 'n-a';
  }

  return $text;
}



function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/liinux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
   
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
   
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
   
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
   
    // check if we have a number
    if ($version==null || $version=="") {$version="?";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}

$ua=getBrowser();
$yourbrowser= $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];

/* * * * * * * * * * * * * * *
* Returns IP & Country
* * * * * * * * * * * * * * */

function khodex_ip()
{

    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $country  = "Unknown";

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $ip_data_in = curl_exec($ch); // string
    curl_close($ch);

    $ip_data = json_decode($ip_data_in,true);
    $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/

    if($ip_data && $ip_data['geoplugin_countryName'] != null) {
        $country = $ip_data['geoplugin_countryName'];
    }

    return ''.$ip;
}


// Khodex Get Country Only


function khodex_country()
{

    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $country  = "Unknown";

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $ip_data_in = curl_exec($ch); // string
    curl_close($ch);

    $ip_data = json_decode($ip_data_in,true);
    $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/

    if($ip_data && $ip_data['geoplugin_countryName'] != null) {
        $country = $ip_data['geoplugin_countryName'];
    }

    return ''.$country;
}

function khodex_character_limit($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}

function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function isKhodexMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


function khodex_number_format( $n, $precision = 1 ) {
	if ($n < 900) {
		// 0 - 900
		$n_format = number_format($n, $precision);
		$suffix = '';
	} else if ($n < 900000) {
		// 0.9k-850k
		$n_format = number_format($n / 1000, $precision);
		$suffix = 'K';
	} else if ($n < 900000000) {
		// 0.9m-850m
		$n_format = number_format($n / 1000000, $precision);
		$suffix = 'M';
	} else if ($n < 900000000000) {
		// 0.9b-850b
		$n_format = number_format($n / 1000000000, $precision);
		$suffix = 'B';
	} else {
		// 0.9t+
		$n_format = number_format($n / 1000000000000, $precision);
		$suffix = 'T';
	}

  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
	if ( $precision > 0 ) {
		$dotzero = '.' . str_repeat( '0', $precision );
		$n_format = str_replace( $dotzero, '', $n_format );
	}

	return $n_format . $suffix;
}
?>