{if !isset($user)}
    {header("Location:index.php")}
{elseif !$user -> isSponsor()}
    {if $user -> isAccedes()}
        {header("Location:accedes-page.php")}
    {elseif $user -> isAdmin()}
        {header("Location:sponsor-page.php")}
    {/if}
{/if}