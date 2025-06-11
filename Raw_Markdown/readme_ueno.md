# GitHubにあげているDockerfileなどをローカル環境で使って環境構築をしたい場合
MacとWindowsで違うかもしれないけれど，多分似通ってると思う．
**Dockerはインストールしていることが前提**
**3rd_generation_hackathonのリポジトリにあげているデータを使用して環境構築することが前提**

---

### 1.GitHubから`Dockerfile`&`user_data.sh`をダウンロードする
- **GitHub**からダウンロードしたファイルは同一ディレクトリに保存する(以下のような構成にして)
```tree
.
├── Dockerfile
└── user_data.sh
```

---

### 2.dockerfileを使える形にする
#### 次のコマンドを順に実行していく
コピーでOK

---

**1**
```bash
docker build -t my-django-app .
```
- 初回はちょっと時間かかります
<br>

**2**
```bash
docker run --rm my-django-app python manage.py migrate
```
- 初回のみ必要
<br>

**3**
```bash
docker run -d -p 8000:8000 --name django-container my-django-app
```
- ホストのポート8000をコンテナのポート8000に接続（外からアクセス可能にする）

<br>

**4**
```bash
docker exec -it django-container bash
```
- これを実行するとLinuxのターミナルと同様の操作ができる
<br>

**5**
```bash
ls
```
- **GitHub**の`3rd_generation_hackathon`リポジトリにあるファイル達があればOK
- なかったら`user_data.sh`の内容を上から順にコピーして

---

### Django動作確認
以下のコマンドをブラウザに入力してDjangoの画面が出たらOK
```bash
http://localhost:8000/
```
