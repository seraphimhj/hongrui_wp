    	<ul>
		<?php
            // 执行数据库查询
            $counts = $wpdb->get_results("SELECT COUNT(comment_author) AS cnt, comment_author, comment_author_url, comment_author_email
                FROM {$wpdb->prefix}comments
                WHERE comment_date > date_sub( NOW(), INTERVAL 2 WEEK )
                    AND comment_approved = '1'
                    AND comment_author_email != 'carlgreat@gmail.com'
                    AND comment_author_url != 'http://lisizhang.com'
					AND comment_author_email != 'lisizhang@qq.com'
                    AND comment_author_url != 'http://www.blook.org.cn'
                    AND comment_type = ''
                    AND user_id != '1'
                GROUP BY comment_author
                ORDER BY cnt DESC
                LIMIT 12");
        
            $mostactive = '';
            if ( $counts ) {
            // 输出读者列表      
                foreach ($counts as $count) {
                    $c_url = $count->comment_author_url;
                    $mostactive .= '<li>' . '<a href="'. $c_url . '" title="' . $count->comment_author .' 发表 '. $count->cnt . ' 条评论" target="_blank">' . get_avatar($count->comment_author_email, 40, '', $count->comment_author . ' 发表 ' . $count->cnt . ' 条评论') . '</a></li>';
                }
                echo $mostactive;
            }
        ?>
        </ul>