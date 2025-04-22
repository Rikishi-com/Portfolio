<!DOCTYPE html><html><head>
      <title>ssh_summary</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <link rel="stylesheet" href="file:////Users/yuki/.vscode/extensions/shd101wyy.markdown-preview-enhanced-0.8.18/crossnote/dependencies/katex/katex.min.css">
      
      
      
      
      
      <style>
      code[class*=language-],pre[class*=language-]{color:#333;background:0 0;font-family:Consolas,"Liberation Mono",Menlo,Courier,monospace;text-align:left;white-space:pre;word-spacing:normal;word-break:normal;word-wrap:normal;line-height:1.4;-moz-tab-size:8;-o-tab-size:8;tab-size:8;-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;hyphens:none}pre[class*=language-]{padding:.8em;overflow:auto;border-radius:3px;background:#f5f5f5}:not(pre)>code[class*=language-]{padding:.1em;border-radius:.3em;white-space:normal;background:#f5f5f5}.token.blockquote,.token.comment{color:#969896}.token.cdata{color:#183691}.token.doctype,.token.macro.property,.token.punctuation,.token.variable{color:#333}.token.builtin,.token.important,.token.keyword,.token.operator,.token.rule{color:#a71d5d}.token.attr-value,.token.regex,.token.string,.token.url{color:#183691}.token.atrule,.token.boolean,.token.code,.token.command,.token.constant,.token.entity,.token.number,.token.property,.token.symbol{color:#0086b3}.token.prolog,.token.selector,.token.tag{color:#63a35c}.token.attr-name,.token.class,.token.class-name,.token.function,.token.id,.token.namespace,.token.pseudo-class,.token.pseudo-element,.token.url-reference .token.variable{color:#795da3}.token.entity{cursor:help}.token.title,.token.title .token.punctuation{font-weight:700;color:#1d3e81}.token.list{color:#ed6a43}.token.inserted{background-color:#eaffea;color:#55a532}.token.deleted{background-color:#ffecec;color:#bd2c00}.token.bold{font-weight:700}.token.italic{font-style:italic}.language-json .token.property{color:#183691}.language-markup .token.tag .token.punctuation{color:#333}.language-css .token.function,code.language-css{color:#0086b3}.language-yaml .token.atrule{color:#63a35c}code.language-yaml{color:#183691}.language-ruby .token.function{color:#333}.language-markdown .token.url{color:#795da3}.language-makefile .token.symbol{color:#795da3}.language-makefile .token.variable{color:#183691}.language-makefile .token.builtin{color:#0086b3}.language-bash .token.keyword{color:#0086b3}pre[data-line]{position:relative;padding:1em 0 1em 3em}pre[data-line] .line-highlight-wrapper{position:absolute;top:0;left:0;background-color:transparent;display:block;width:100%}pre[data-line] .line-highlight{position:absolute;left:0;right:0;padding:inherit 0;margin-top:1em;background:hsla(24,20%,50%,.08);background:linear-gradient(to right,hsla(24,20%,50%,.1) 70%,hsla(24,20%,50%,0));pointer-events:none;line-height:inherit;white-space:pre}pre[data-line] .line-highlight:before,pre[data-line] .line-highlight[data-end]:after{content:attr(data-start);position:absolute;top:.4em;left:.6em;min-width:1em;padding:0 .5em;background-color:hsla(24,20%,50%,.4);color:#f4f1ef;font:bold 65%/1.5 sans-serif;text-align:center;vertical-align:.3em;border-radius:999px;text-shadow:none;box-shadow:0 1px #fff}pre[data-line] .line-highlight[data-end]:after{content:attr(data-end);top:auto;bottom:.4em}html body{font-family:'Helvetica Neue',Helvetica,'Segoe UI',Arial,freesans,sans-serif;font-size:16px;line-height:1.6;color:#333;background-color:#fff;overflow:initial;box-sizing:border-box;word-wrap:break-word}html body>:first-child{margin-top:0}html body h1,html body h2,html body h3,html body h4,html body h5,html body h6{line-height:1.2;margin-top:1em;margin-bottom:16px;color:#000}html body h1{font-size:2.25em;font-weight:300;padding-bottom:.3em}html body h2{font-size:1.75em;font-weight:400;padding-bottom:.3em}html body h3{font-size:1.5em;font-weight:500}html body h4{font-size:1.25em;font-weight:600}html body h5{font-size:1.1em;font-weight:600}html body h6{font-size:1em;font-weight:600}html body h1,html body h2,html body h3,html body h4,html body h5{font-weight:600}html body h5{font-size:1em}html body h6{color:#5c5c5c}html body strong{color:#000}html body del{color:#5c5c5c}html body a:not([href]){color:inherit;text-decoration:none}html body a{color:#08c;text-decoration:none}html body a:hover{color:#00a3f5;text-decoration:none}html body img{max-width:100%}html body>p{margin-top:0;margin-bottom:16px;word-wrap:break-word}html body>ol,html body>ul{margin-bottom:16px}html body ol,html body ul{padding-left:2em}html body ol.no-list,html body ul.no-list{padding:0;list-style-type:none}html body ol ol,html body ol ul,html body ul ol,html body ul ul{margin-top:0;margin-bottom:0}html body li{margin-bottom:0}html body li.task-list-item{list-style:none}html body li>p{margin-top:0;margin-bottom:0}html body .task-list-item-checkbox{margin:0 .2em .25em -1.8em;vertical-align:middle}html body .task-list-item-checkbox:hover{cursor:pointer}html body blockquote{margin:16px 0;font-size:inherit;padding:0 15px;color:#5c5c5c;background-color:#f0f0f0;border-left:4px solid #d6d6d6}html body blockquote>:first-child{margin-top:0}html body blockquote>:last-child{margin-bottom:0}html body hr{height:4px;margin:32px 0;background-color:#d6d6d6;border:0 none}html body table{margin:10px 0 15px 0;border-collapse:collapse;border-spacing:0;display:block;width:100%;overflow:auto;word-break:normal;word-break:keep-all}html body table th{font-weight:700;color:#000}html body table td,html body table th{border:1px solid #d6d6d6;padding:6px 13px}html body dl{padding:0}html body dl dt{padding:0;margin-top:16px;font-size:1em;font-style:italic;font-weight:700}html body dl dd{padding:0 16px;margin-bottom:16px}html body code{font-family:Menlo,Monaco,Consolas,'Courier New',monospace;font-size:.85em;color:#000;background-color:#f0f0f0;border-radius:3px;padding:.2em 0}html body code::after,html body code::before{letter-spacing:-.2em;content:'\00a0'}html body pre>code{padding:0;margin:0;word-break:normal;white-space:pre;background:0 0;border:0}html body .highlight{margin-bottom:16px}html body .highlight pre,html body pre{padding:1em;overflow:auto;line-height:1.45;border:#d6d6d6;border-radius:3px}html body .highlight pre{margin-bottom:0;word-break:normal}html body pre code,html body pre tt{display:inline;max-width:initial;padding:0;margin:0;overflow:initial;line-height:inherit;word-wrap:normal;background-color:transparent;border:0}html body pre code:after,html body pre code:before,html body pre tt:after,html body pre tt:before{content:normal}html body blockquote,html body dl,html body ol,html body p,html body pre,html body ul{margin-top:0;margin-bottom:16px}html body kbd{color:#000;border:1px solid #d6d6d6;border-bottom:2px solid #c7c7c7;padding:2px 4px;background-color:#f0f0f0;border-radius:3px}@media print{html body{background-color:#fff}html body h1,html body h2,html body h3,html body h4,html body h5,html body h6{color:#000;page-break-after:avoid}html body blockquote{color:#5c5c5c}html body pre{page-break-inside:avoid}html body table{display:table}html body img{display:block;max-width:100%;max-height:100%}html body code,html body pre{word-wrap:break-word;white-space:pre}}.markdown-preview{width:100%;height:100%;box-sizing:border-box}.markdown-preview ul{list-style:disc}.markdown-preview ul ul{list-style:circle}.markdown-preview ul ul ul{list-style:square}.markdown-preview ol{list-style:decimal}.markdown-preview ol ol,.markdown-preview ul ol{list-style-type:lower-roman}.markdown-preview ol ol ol,.markdown-preview ol ul ol,.markdown-preview ul ol ol,.markdown-preview ul ul ol{list-style-type:lower-alpha}.markdown-preview .newpage,.markdown-preview .pagebreak{page-break-before:always}.markdown-preview pre.line-numbers{position:relative;padding-left:3.8em;counter-reset:linenumber}.markdown-preview pre.line-numbers>code{position:relative}.markdown-preview pre.line-numbers .line-numbers-rows{position:absolute;pointer-events:none;top:1em;font-size:100%;left:0;width:3em;letter-spacing:-1px;border-right:1px solid #999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.markdown-preview pre.line-numbers .line-numbers-rows>span{pointer-events:none;display:block;counter-increment:linenumber}.markdown-preview pre.line-numbers .line-numbers-rows>span:before{content:counter(linenumber);color:#999;display:block;padding-right:.8em;text-align:right}.markdown-preview .mathjax-exps .MathJax_Display{text-align:center!important}.markdown-preview:not([data-for=preview]) .code-chunk .code-chunk-btn-group{display:none}.markdown-preview:not([data-for=preview]) .code-chunk .status{display:none}.markdown-preview:not([data-for=preview]) .code-chunk .output-div{margin-bottom:16px}.markdown-preview .md-toc{padding:0}.markdown-preview .md-toc .md-toc-link-wrapper .md-toc-link{display:inline;padding:.25rem 0}.markdown-preview .md-toc .md-toc-link-wrapper .md-toc-link div,.markdown-preview .md-toc .md-toc-link-wrapper .md-toc-link p{display:inline}.markdown-preview .md-toc .md-toc-link-wrapper.highlighted .md-toc-link{font-weight:800}.scrollbar-style::-webkit-scrollbar{width:8px}.scrollbar-style::-webkit-scrollbar-track{border-radius:10px;background-color:transparent}.scrollbar-style::-webkit-scrollbar-thumb{border-radius:5px;background-color:rgba(150,150,150,.66);border:4px solid rgba(150,150,150,.66);background-clip:content-box}html body[for=html-export]:not([data-presentation-mode]){position:relative;width:100%;height:100%;top:0;left:0;margin:0;padding:0;overflow:auto}html body[for=html-export]:not([data-presentation-mode]) .markdown-preview{position:relative;top:0;min-height:100vh}@media screen and (min-width:914px){html body[for=html-export]:not([data-presentation-mode]) .markdown-preview{padding:2em calc(50% - 457px + 2em)}}@media screen and (max-width:914px){html body[for=html-export]:not([data-presentation-mode]) .markdown-preview{padding:2em}}@media screen and (max-width:450px){html body[for=html-export]:not([data-presentation-mode]) .markdown-preview{font-size:14px!important;padding:1em}}@media print{html body[for=html-export]:not([data-presentation-mode]) #sidebar-toc-btn{display:none}}html body[for=html-export]:not([data-presentation-mode]) #sidebar-toc-btn{position:fixed;bottom:8px;left:8px;font-size:28px;cursor:pointer;color:inherit;z-index:99;width:32px;text-align:center;opacity:.4}html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] #sidebar-toc-btn{opacity:1}html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc{position:fixed;top:0;left:0;width:300px;height:100%;padding:32px 0 48px 0;font-size:14px;box-shadow:0 0 4px rgba(150,150,150,.33);box-sizing:border-box;overflow:auto;background-color:inherit}html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc::-webkit-scrollbar{width:8px}html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc::-webkit-scrollbar-track{border-radius:10px;background-color:transparent}html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc::-webkit-scrollbar-thumb{border-radius:5px;background-color:rgba(150,150,150,.66);border:4px solid rgba(150,150,150,.66);background-clip:content-box}html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc a{text-decoration:none}html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc .md-toc{padding:0 16px}html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc .md-toc .md-toc-link-wrapper .md-toc-link{display:inline;padding:.25rem 0}html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc .md-toc .md-toc-link-wrapper .md-toc-link div,html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc .md-toc .md-toc-link-wrapper .md-toc-link p{display:inline}html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .md-sidebar-toc .md-toc .md-toc-link-wrapper.highlighted .md-toc-link{font-weight:800}html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .markdown-preview{left:300px;width:calc(100% - 300px);padding:2em calc(50% - 457px - 300px / 2);margin:0;box-sizing:border-box}@media screen and (max-width:1274px){html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .markdown-preview{padding:2em}}@media screen and (max-width:450px){html body[for=html-export]:not([data-presentation-mode])[html-show-sidebar-toc] .markdown-preview{width:100%}}html body[for=html-export]:not([data-presentation-mode]):not([html-show-sidebar-toc]) .markdown-preview{left:50%;transform:translateX(-50%)}html body[for=html-export]:not([data-presentation-mode]):not([html-show-sidebar-toc]) .md-sidebar-toc{display:none}
/* Please visit the URL below for more information: */
/*   https://shd101wyy.github.io/markdown-preview-enhanced/#/customize-css */

      </style>
      <!-- The content below will be included at the end of the <head> element. --><script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function () {
    // your code here
  });
</script></head><body for="html-export"><?php include "header.html"; ?>
    
    
      <div class="crossnote markdown-preview  ">
      
<h1 id="ssh通信についての学習まとめ">SSH通信についての学習まとめ </h1>
<p>前提として，IPアドレスを[57.180.208.0]として，AWSを使用している(ユーザ名が<strong>ec2-user</strong>)<br>
<br></p>
<h2 id="ssh通信とは">SSH通信とは </h2>
<p>SSH（Secure Shell）は，ネットワーク越しに他のコンピュータへ安全に接続するためのプロトコルである．<br>
主にリモートサーバの操作やファイルの転送に使われ，通信は暗号化されているため安全である．</p>
<hr>
<h2 id="ssh接続の基本コマンド">SSH接続の基本コマンド </h2>
<pre data-role="codeBlock" data-info="bash" class="language-bash bash"><code><span class="token function">ssh</span> ユーザー名@ホスト名（またはIPアドレス）
</code></pre><h3 id="例">例 </h3>
<pre data-role="codeBlock" data-info="bash" class="language-bash bash"><code><span class="token function">ssh</span> ec2-user@57.180.208.0
</code></pre><h3 id="秘密鍵pemを使って接続する場合">秘密鍵（.pem）を使って接続する場合 </h3>
<pre data-role="codeBlock" data-info="bash" class="language-bash bash"><code><span class="token function">ssh</span> <span class="token parameter variable">-i</span> <span class="token punctuation">[</span>秘密鍵のパス<span class="token punctuation">]</span> ec2-user@57.180.208.0
</code></pre><p><code>-i</code>-秘密鍵ファイルを指定するオプション</p>
<hr>
<h2 id="ssh接続に必要なもの">SSH接続に必要なもの </h2>
<table>
<thead>
<tr>
<th>必要なもの</th>
<th>説明</th>
</tr>
</thead>
<tbody>
<tr>
<td>ユーザー名</td>
<td>接続先のサーバで使用するアカウント（例：ec2-user）</td>
</tr>
<tr>
<td>IPアドレスまたはホスト名</td>
<td>接続先サーバのアドレス</td>
</tr>
<tr>
<td>秘密鍵ファイル（.pem）</td>
<td>AWS EC2などで提供される認証鍵</td>
</tr>
<tr>
<td>SSHクライアント</td>
<td>ターミナル（Mac・Linux）やPuTTY（Windows）など</td>
</tr>
</tbody>
</table>
<h3 id="秘密鍵を指定せずにssh通信を開始する方法">秘密鍵を指定せずにSSH通信を開始する方法 </h3>
<h4 id="sshconfig-に設定を書く">~/.ssh/config に設定を書く </h4>
<p>以下のように<code>config</code>ファイルに設定を記述する</p>
<pre data-role="codeBlock" data-info="bash" class="language-bash bash"><code><span class="token comment"># ~/.ssh/config</span>
Host my-ec2
  HostName <span class="token number">57.180</span>.208.0
  User ec2-user
  IdentityFile <span class="token punctuation">[</span>秘密鍵のパス<span class="token punctuation">]</span>
</code></pre><hr>
<h2 id="ファイルのアップロード方法scp">ファイルのアップロード方法（scp） </h2>
<pre data-role="codeBlock" data-info="bash" class="language-bash bash"><code><span class="token function">scp</span> <span class="token parameter variable">-i</span> /path/to/key.pem ローカルファイル ec2-user@IP:/アップロード先パス
</code></pre><p><code>scp</code>-Secure Copy Protocol，リモートサーバとローカル間でファイルを安全にコピーするためのコマンド</p>
<h3 id="ディレクトリをアップロードする場合">ディレクトリをアップロードする場合 </h3>
<pre data-role="codeBlock" data-info="bash" class="language-bash bash"><code><span class="token function">scp</span> <span class="token parameter variable">-i</span> <span class="token punctuation">[</span>秘密鍵のパス<span class="token punctuation">]</span> <span class="token parameter variable">-r</span> ローカルディレクトリ ec2-user@IP:/アップロード先パス
</code></pre><hr>
<h2 id="ファイルのダウンロード方法">ファイルのダウンロード方法 </h2>
<pre data-role="codeBlock" data-info="bash" class="language-bash bash"><code><span class="token function">scp</span> <span class="token parameter variable">-i</span> /path/to/key.pem ec2-user@IP:/サーバ上のファイル ./ローカルパス
</code></pre><hr>
<h2 id="差分アップロード上書きアップロードrsync">差分アップロード・上書きアップロード（rsync） </h2>
<p>より効率的に変更ファイルだけをアップロードするには，<code>rsync</code> を使う．</p>
<h3 id="rsyncコマンドの例">rsyncコマンドの例 </h3>
<pre data-role="codeBlock" data-info="bash" class="language-bash bash"><code><span class="token function">rsync</span> <span class="token parameter variable">-avz</span> <span class="token parameter variable">-e</span> <span class="token string">"ssh -i /path/to/key.pem"</span> ./local_dir/ ec2-user@IP:/remote_dir/
</code></pre><table>
<thead>
<tr>
<th>オプション</th>
<th>説明</th>
</tr>
</thead>
<tbody>
<tr>
<td>-a</td>
<td>アーカイブモード（再帰的・権限維持）</td>
</tr>
<tr>
<td>-v</td>
<td>詳細出力</td>
</tr>
<tr>
<td>-z</td>
<td>転送時に圧縮</td>
</tr>
<tr>
<td>-e</td>
<td>SSHオプションを指定</td>
</tr>
</tbody>
</table>
<hr>
<h2 id="vscodeのremote-sshの使い方">VSCodeのRemote SSHの使い方 </h2>
<ol>
<li>拡張機能から「Remote - SSH」をインストールする．</li>
<li>左下の緑色のアイコンから「Remote-SSH: Connect to Host...」を選ぶ．</li>
<li><code>~/.ssh/config</code> にホスト情報を追加しておくと便利である．</li>
</ol>
<h3 id="ssh設定ファイルの例sshconfig">SSH設定ファイルの例（~/.ssh/config） </h3>
<pre data-role="codeBlock" data-info="bash" class="language-bash bash"><code>Host my-ec2
  HostName <span class="token number">57.180</span>.208.0
  User ec2-user
  IdentityFile <span class="token punctuation">[</span>秘密鍵のパス<span class="token punctuation">]</span>
</code></pre><ol start="4">
<li>接続後，VSCodeのファイルエクスプローラーからリモートサーバ内のファイルを編集できる．</li>
<li>編集後に保存すれば，自動でサーバに上書き保存される．</li>
</ol>
<hr>
<h2 id="ssh接続終了方法">SSH接続終了方法 </h2>
<p>接続中に <code>exit</code> または <code>Ctrl + D</code> で終了できる．</p>
<hr>
<h2 id="よくあるエラーと対処法">よくあるエラーと対処法 </h2>
<table>
<thead>
<tr>
<th>エラー内容</th>
<th>対処法</th>
</tr>
</thead>
<tbody>
<tr>
<td>Permission denied (publickey)</td>
<td>鍵ファイルのパーミッションを <code>chmod 400</code> または <code>600</code> に設定する．</td>
</tr>
<tr>
<td>Connection timed out</td>
<td>サーバのIPアドレス，セキュリティグループの設定を確認する．</td>
</tr>
<tr>
<td>Host key verification failed</td>
<td><code>~/.ssh/known_hosts</code> の該当エントリを削除して再接続する．</td>
</tr>
</tbody>
</table>
<hr>
<h2 id="まとめ">まとめ </h2>
<ul>
<li>SSHは安全なリモート接続のためのプロトコルである．</li>
<li><code>scp</code>でファイル転送が可能だが，差分のみ転送したい場合は<code>rsync</code>を使う．</li>
<li>VSCodeのRemote SSH機能を使えばGUIで直感的にサーバ操作ができる．</li>
</ul>

      </div>
      
      
    
    
    
    
    
    
  
    </body></html>