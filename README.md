# 学生管理系统

本项目是一个基于 **PHP + MySQL + HTML** 的简易学生管理系统，适合学习与实验。

> ⚠️ 安全提醒：项目包含 SQL 注入、明文口令等高风险问题，仅用于学习交流，**禁止用于生产环境**。

---

## 技术栈

- **PHP（Apache）**：业务逻辑
- **MySQL**：数据存储
- **HTML/CSS**：页面展示
- **Docker / Docker Compose（可选）**：容器化部署

---

## 已支持的两种部署方式

1. **Docker 部署（推荐）**：开箱即用，环境一致性高。
2. **非 Docker 直接部署**：在本机 Apache + PHP + MySQL 环境直接运行。

项目新增统一数据库连接文件 `db_connect.php`，优先读取环境变量（或 `.env`），因此两种方式可共用同一套代码。

---

## 方式一：使用 Docker 部署（推荐）

### 1) 前置条件

- 已安装 Docker Desktop（Windows/macOS）或 Docker Engine（Linux）
- 支持 `docker compose` 命令

### 2) 配置（可选）

项目根目录已提供 `.env`，默认内容如下（可按需修改）：

- `MYSQL_ROOT_PASSWORD=root`
- `MYSQL_DATABASE=xscj`
- `WEB_PORT=8080`

### 3) 启动服务

在项目根目录执行：

`docker compose up -d --build`

### 4) 访问系统

- Web: `http://localhost:8080`
- MySQL: `localhost:3306`

### 5) 常用运维命令

- 查看日志：`docker compose logs -f`
- 停止服务：`docker compose down`
- 停止并清空数据库卷（重置数据）：`docker compose down -v`

---

## 方式二：不使用 Docker，直接部署运行

你可以使用 XAMPP / WAMP / phpStudy，或自建 Apache + PHP + MySQL 环境。

### 1) 前置条件

- Apache（或 Nginx + PHP-FPM）
- PHP（建议 5.5+，项目原始写法偏旧）
- MySQL（建议 5.5/5.7，和项目 SQL 脚本更匹配）

### 2) 放置项目文件

将项目放到 Web 根目录，例如：

- XAMPP: `htdocs/Student-Management-System`

### 3) 初始化数据库

1. 创建数据库：`xscj`
2. 导入 `xs.sql`

> 说明：`user.sql` 为旧版本 MySQL 用户表导出内容，和不同 MySQL 版本差异较大；本地直跑时通常不必强制导入它。若登录/注册流程需完全复现旧行为，建议优先使用 Docker 方式。

### 4) 配置数据库连接

编辑项目根目录 `.env`（已提供），按本机环境修改：

- `DB_HOST=127.0.0.1`
- `DB_USER=root`
- `DB_PASSWORD=你的密码`
- `DB_NAME=xscj`

### 5) 启动并访问

- 启动 Apache 与 MySQL
- 浏览器访问：`http://localhost/Student-Management-System/index.html`

---

## 数据库连接配置说明

所有 PHP 页面通过 `db_connect.php` 建立连接：

- 优先使用系统环境变量（适合 Docker / CI）
- 若未提供系统环境变量，则读取项目根目录 `.env`
- 最后回退到默认值（`localhost/root/root/xscj`）

---

## 常见问题

### 1) 页面报“连接失败”

- 检查 MySQL 是否启动
- 检查 `.env` 中 `DB_HOST/DB_USER/DB_PASSWORD/DB_NAME`
- Docker 场景下确认 `db` 容器状态正常

### 2) 注册/登录异常

项目登录注册逻辑直接操作 `mysql.user`，与 MySQL 版本强相关。若在新版本 MySQL 上出现兼容问题，建议优先使用 Docker 方式复现。

### 3) 中文乱码

项目使用 `GBK`，请确保页面与数据库字符集配置一致。

---

## 原作者扩展阅读

- 博客（外网）：<https://kashima19960.github.io/2024/07/30/mysql+php+html%E5%AE%9E%E7%8E%B0%E5%AD%A6%E7%94%9F%E7%AE%A1%E7%90%86%E7%B3%BB%E7%BB%9F/?highlight=m>
- 博客（国内）：<https://blog.csdn.net/m0_73366745/article/details/140802055?spm=1001.2014.3001.5501>