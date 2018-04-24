<?

$url = "https://medium.com/thediegopeixotoshow/".$_GET["medium"];




$dados = file_get_contents($url);
$dados_mod = str_replace(" – Medium", "", $dados); // Changes Title Meta Tag
$dados_mod = str_replace('<link rel="canonical" href="https://medium.com/thediegopeixotoshow/', '<link rel="canonical" href="https://blog.diegopeixoto.net/', $dados_mod); // Changes Canonical
$dados_mod = str_replace('<meta property="og:url" content="https://medium.com/thediegopeixotoshow/', '<meta property="og:url" content="https://blog.diegopeixoto.net/', $dados_mod); // Changes og:content
$dados_mod = str_replace('href="https://medium.com/thediegopeixotoshow', 'href="https://blog.diegopeixoto.net', $dados_mod); // Changes SEO Links

$dados_mod = str_replace('/home', '/', $dados_mod); // Gambiarra

echo $dados_mod;

exit;

?>