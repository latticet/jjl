<?php exit;?>
<div class="sort pd5">
<p class="mbm">
    <!--{if $_GET[action] == 'newthread'}-->            
        <input type="text" name="rewardprice" id="rewardprice" class="txt_s" placeholder="{lang reward_price}" />
        <span class="xi1"> {lang you_have} <!--{echo getuserprofile('extcredits'.$_G['setting']['creditstransextra'][2]);}--> {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][title]}</span>
    <!--{elseif $_GET[action] == 'edit'}-->
        <!--{if $isorigauthor}-->
            <!--{if $thread['price'] > 0}-->
                <label for="rewardprice">{lang reward_price}:</label>
                <input type="text" name="rewardprice" id="rewardprice" class="txt_s" size="6" value="$rewardprice" placeholder="{lang reward_price}"  />
                {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][title]}
                ({lang reward_tax_add} <span id="realprice">0</span> {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][title]} , {lang reward_low} {$_G['group']['minrewardprice']} {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][unit]}<!--{if $_G['group']['maxrewardprice'] > 0}--> - {$_G['group']['maxrewardprice']} {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][unit]}<!--{/if}-->)
                <span class="xg1">, {lang you_have} <!--{echo getuserprofile('extcredits'.$_G['setting']['creditstransextra'][2]);}--> {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][title]}</span>
            <!--{else}-->
                {lang post_reward_resolved}
                <input type="hidden" name="rewardprice" value="$rewardprice"  />
            <!--{/if}-->
        <!--{else}-->
            <!--{if $thread['price'] > 0}-->
                {lang reward_price}: $rewardprice {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][title]}
            <!--{else}-->
                {lang post_reward_resolved}
            <!--{/if}-->
        <!--{/if}-->
    <!--{/if}-->
    </p>
    <!--{if $_G['setting']['rewardexpiration'] > 0}-->
        <p class="xg1 mbm">$_G['setting']['rewardexpiration'] {lang post_reward_message}</p>
    <!--{/if}-->
</div>