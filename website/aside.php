<?php
/**
 * Aside component that displays real-time inventory statistics
 * Shows total categories, products and list price sum
 * Updated via AJAX calls to realtime.php
 */
?>

<style>
    aside {
        padding: 15px;
        border-top: 1px solid #E2EAEF;
        border-left: 1px solid #E2EAEF;
        background-color: #f3f6f8;
        float: right;
        width: 15%;
        height: 100%;
        position: fixed;
        right: 0;
        overflow-y: auto;
    }
</style>

<aside>
<?php
if (isset($_SESSION['login'])) {
?>
    <h2>Real-time Inventory Info</h2>
    <hr>

    <h3>Category Count:
    <span id="categorycount">0</span></h3>

    <h3>Item Count:
    <span id="itemcount">0</span></h3>

    <h3>List Price Total: $
    <span id="listpricetotal">0.00</span></h3>

    <h3>Wholesale Price Total: $
    <span id="wholesalepricetotal">0.00</span></h3>
<?php
} else {
?>
    <h2>Welcome to JPC</h2>
    <hr>
    <h3>Please log in to:</h3>
    <ul>
        <li>View inventory stats</li>
        <li>Manage categories</li>
        <li>Track products</li>
        <li>Monitor prices</li>
    </ul>
<?php
}
?>
</aside>