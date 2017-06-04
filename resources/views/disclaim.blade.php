@extends('layouts.base')

@section('title')
  聲明
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" data-background-color="purple">
          <h4 class="title">加入前請先確認以下事項</h4>
        </div>
        <div class="card-content">
					<h2>前言</h2>
          <p>投資一定有風險，基金投資有賺有賠，申購前應詳閱公開說明書。</p>
          <h2>目的</h2>
          <ol>
            <li>能<b>儘可能的</b>分擔手續費，將手續費稀釋到最低，每個月如果需要結算會一次提領</li>
            <li>可以做到<b>每個月</b>領出來的程度</li>
            <li>能在同一個block(區塊)得到相對多的虛擬幣</li>
          </ol>
          <h2>請注意</h2>
          <ol>
            <li>投資不一定會獲利，所以請依照自己財力為準進行投資</li>
            <li>提領的款項不一定會等於分配到的比例，可能因為數目太小或是手續費的關係造成部分無法請領的現象</li>
            <li>投資單位為美金，但是美金匯率是波動的狀態，所以可能會有可能收的錢會跟實際上不太一樣</li>
          </ol>
          <h2>其他</h2>
          <ul>
            <li>目前採雲端挖礦的方式，並且依照投資比例分配，分配規則為<b>無條件捨去</b>到小數點後五位(即精度為: 0.00001)</li>
            <li>合約採用疊加的方式，譬如: A買了2017/01/01的合約以及2017/01/15，那麼在2018/1/2的時候2017/01/01的會失效，只剩下2017/01/15</li>
            <li>帳戶餘額充足的情況下，每個月可以進行提領</li>
            <li>因為有安全限制，十四天內不准提出帳戶，要加碼的請統一在每個月的<b>第一個禮拜</b>內提出</li>
            <li>不接受不認識的人一起投...</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection