{if !isset($user)}
    {header("Location:index.php")}
{elseif !$user -> isAccedes()}
    {if $user -> isAdmin()}
        {header("Location:admin-page.php")}
    {elseif $user -> isSponsor()}
        {header("Location:sponsor-page.php")}
    {/if}
{/if}