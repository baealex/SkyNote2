# NotePHPad

> PHP를 이용하여 간단하게 메모할 수 있는 웹페이지	

데이터 베이스를 사용하지 않는 **초 심플 감성자극 노트 디자인의 웹 메모장**입니다.

## 설치 방법	

웹서버(Nginx)와 PHP7이 필요합니다.

```
sudo apt-get install nginx php7-fpm
```

설치가 완료되었다면 Nginx의 설정파일을 수정합니다.

```
sudo vi /etc/nginx/sites-available/default
```

```
server {
    ...
    server_name memo.domain.com;
    root /home/user/memo;
    ...
    index index.html index.php;
    ...
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php7.0-fpm.sock;
    }
    ...
    location ~ \.txt$ {	
        return 403;	
    }
}
```

지정한 루트경로에 해당 소스코드를 삽입하고, PHP를 사용할 수 있도록 해줍니다. 또한 외부에서 텍스트 파일에 접근하지 못하도록 설정하였습니다.

최초 비밀번호는 `baealex`입니다!

## 상세 설명	

예전부터 한 서버에서 여러개의 도메인을 사용할 수 없는지 궁금했습니다. '네임서버'를 구현해야 한다부터 다양한 답변을 들었지만 너무 벅차보이는 일이었죠. 하지만 웹서버에서 정말 간단하게 '가상 호스팅'이라는 것을 사용할 수 있다는 것을 알았습니다. 그리고 바로 만들어 낸 것이 바로 이 `NotePHPad`!

<br>

이름에서 알 수 있듯 `NotePHPad`는 `PHP`를 사용하여 기록하는 웹 메모장입니다. 요즘처럼 개인정보에 민감한 시대에 누굴 믿고 자신의 메모를 내어줄 수 있을까요? 당신의 웹서버에서 당신만을 위한 페이지를 개설해 보세요!

<br/>

![bandicam 2019-01-20 13-21-42-773](https://user-images.githubusercontent.com/35596687/51435234-6a074e00-1cb6-11e9-8b18-47e1f5901e70.png)

<br/>

심플하게 로그인을 하고 심플하게 작성하고 심플하게 살펴보고 심플하게 메모를 다운로드하고 심플하게 메모를 삭제할 수 있습니다! 이 작품은 반응형으로 구현되어 어느기기 어느 화면에서나 가독성 좋은 공책과 같은 모습을 보여줍니다.

## 업데이트 내역	

- 2019-01-07	
  - 기본적인 동작 구현	
  - 기본적인 레이아웃 구현(반응형, 노트 디자인)	
  - &lt;a&gt; 태그와 &lt;b&gt; 태그 외 태그 문자 처리	

- 2019-01-08	
  - 카피라이트 문구 2019로 변경	
  - PHP만을 이용한 기본적인 로그인 구현	
  - 현재 메모를 다운로드하는 기능 추가	
  - 모든 태그는 문자로 처리되도록 변경

- 2019-01-09
  - `parsedown` 라이브러리를 이용하여 마크다운 작성 제공
  - 텍스트 입력창이 보이지 않을경우 상단에 고정되도록 수정
  - 헤드라인 태그에는 색상을 삽입하고 링크와 코드의 디자인 변경

- 2019-01-10
  - 메뉴창과 인포메이션 버튼 추가
  - 메뉴창에서 소스코드를 삽입할 수 있는 메뉴 구현
  - 소스코드 textarea에 `codemirror` 라이브러리 적용
  - 로그인 되지 않지 않은 사용자에게 `basic.txt`를 노출

- 2019-01-14
  - 메모를 위에서 삽입할지 아래서 삽입할지 결정한 메뉴 추가

- 2019-01-17
  - 날자별로 새로운 메모를 생성할 수 있도록 변경
  - 상위 인덱스에선 생성된 날짜의 링크를 출력하고 메모작성 불가

- 2019-01-19
  - 입력 상자의 레이아웃 `Absolute`로 변경
  - 비로그인 상태에서는 루트 페이지로 강제 이동
  - 메인 페이지의 입력 상자의 타입을 `Password`로 변경

- 2019-01-20
  - 기본 글씨체 '나눔 펜'으로 변경
  - 메인 페이지에서 해당 메모의 미리보기 제공

- 2019-02-15
  - 반응형 링크로 변경

- 2019-03-12
  - 카피라이트 문구 변경
  - 이메일 주소 변경

## 개발자 정보	

Jino Bae. – [BLOG](https://baejino.com) – im@baejino.com