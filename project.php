// DO NOT EDIT NOTHING HERE -- TKS, ALISSON.

{
  "settings": {
    "name": "Alisson Pelizaro", // You can change it
    "currentPage": "contato.html", // You can change it
    "versionFirst": "4.0.14",
    "uniqCompNum": 70,
    "versionPublish": "4.6.5",
    "theme": {
      "name": "mobirise4",
      "title": "Mobirise 4",
      "styling": {
        "primaryColor": "#72abbe",
        "secondaryColor": "#ff3366",
        "successColor": "#F7ED4A",
        "infoColor": "#82786E",
        "warningColor": "#879A9F",
        "dangerColor": "#B1A374",
        "mainFont": "Rubik",
        "display1Font": "Raleway",
        "display1Size": 4.25,
        "display2Font": "Raleway",
        "display2Size": 3,
        "display5Font": "Raleway",
        "display5Size": 1.5,
        "display7Font": "Raleway",
        "display7Size": 1,
        "display4Font": "Raleway",
        "display4Size": 1,
        "isRoundedButtons": true,
        "isAnimatedOnScroll": true,
        "isScrollToTopButton": false
      },
      "additionalSetColors": [
        "#639770",
        "#00711c",
        "#ff0040",
        "#ccf2ff",
        "#8ce2ff",
        "#72abbe",
        "#e7e7e7"
      ]
    },
    "path": "@PROJECT_PATH@",
    "screenshot": "screenshot.png",
    "robotsText": "User-agent: *\r\nDisallow: /cgi-bin\r\n",
    "robotsSwitcher": "on",
    "siteUrl": "",
    "sitemapSwitcherAuto": "on",
    "favicon": "",
    "noImageResize": ""
  },
  "pages": {
    "index.html": {
      "settings": {
        "main": true,
        "title": "Início | Alisson Pelizaro",// You can change it
        "meta_descr": "Página pessoal de Alisson Pelizaro. Apenas mais um desenvolvedor de Curitiba.",// You can change it
        "header_custom": "",
        "footer_custom": "",
        "html_before": ""
      },
      "components": [
        {
          "_name": "menu1",
          "_customHTML": "<section class=\"menu\" group=\"Menu\" plugins=\"DropDown, TouchSwipe\" always-top global once=\"menu\" not-draggable position-absolute>\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"checkbox\" title=\"Show Logo\" name=\"showLogo\" checked>\n        <input type=\"range\" title=\"Logo Size\" inline name=\"logoSize\" min=\"3.8\" max=\"8\" step=\"0.1\" value=\"3.8\" condition=\"showLogo\">\n        <input type=\"checkbox\" title=\"Show Brand Name\" name=\"showBrand\" checked>\n        <input type=\"checkbox\" title=\"Show Menu Items\" name=\"showItems\" checked>\n        <input type=\"color\" title=\"Items Hover Color\" name=\"itemsHoverColor\" value=\"#c1c1c1\" condition=\"showItems\">\n        <input type=\"checkbox\" title=\"Show Button(s)\" name=\"showButtons\" checked>\n        <input type=\"checkbox\" title=\"Sticky\" name=\"sticky\" checked>\n        <input type=\"checkbox\" title=\"Collapsed\" name=\"collapsed\">\n        <input type=\"checkbox\" title=\"Transparent\" name=\"transparent\">\n        <input type=\"color\" title=\"Hamburger Color\" name=\"hamburgerColor\" value=\"#ffffff\">\n        <input type=\"color\" title=\"Background Color\" name=\"menuBgColor\" value=\"#333333\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <nav class=\"navbar navbar-expand beta-menu navbar-dropdown align-items-center\" mbr-class=\"{'navbar-fixed-top': sticky,\n        'navbar-toggleable-sm': !collapsed,\n        'collapsed': collapsed,\n        'bg-color transparent': transparent}\">\n        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n            <div class=\"hamburger\">\n                <span></span>\n                <span></span>\n                <span></span>\n                <span></span>\n            </div>\n        </button>\n        <div class=\"menu-logo\">\n            <div class=\"navbar-brand\">\n                <span mbr-if=\"showLogo\" class=\"navbar-logo\">\n                    <a href=\"https://mobirise.com\">\n                         <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" mbr-style=\"{'height': logoSize + 'rem'}\" title>\n                    </a>\n                </span>\n                <span mbr-if=\"showBrand\" mbr-buttons mbr-theme-style=\"display-5\" class=\"navbar-caption-wrap\" data-toolbar=\"-mbrBtnMove,-mbrBtnAdd,-mbrBtnRemove\"><a class=\"navbar-caption text-white\" data-app-selector=\".navbar-caption\" href=\"index.html\"><br>Alisson Pelizaro</a></span>\n            </div>\n        </div>\n        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">\n            <ul mbr-if=\"showItems\" mbr-menu class=\"navbar-nav nav-dropdown\" mbr-theme-style=\"display-4\" mbr-class=\"{'nav-right': !showButtons,'navbar-nav-top-padding': isPublish && !showBrand && !showLogo}\"><li class=\"nav-item\">\n                    <a class=\"nav-link link text-white\" href=\"assets/files/CV%20-%20Alisson.pdf\" data-app-selector=\".nav-link,.dropdown-item\"><span class=\"mbri-download mbr-iconfont mbr-iconfont-btn\"></span>\n                        \n                        Currículo</a>\n                </li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"portfolio.html\" data-app-selector=\".nav-link,.dropdown-item\">Portfólio</a></li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"blog.html\" data-app-selector=\".nav-link,.dropdown-item\">\n                        \n                        Blog</a></li></ul>\n            <div mbr-if=\"showButtons\" mbr-buttons mbr-theme-style=\"display-4\" class=\"navbar-buttons mbr-section-btn\"><a class=\"btn btn-sm btn-primary\" href=\"contato.html\"><span class=\"mbri-paper-plane mbr-iconfont mbr-iconfont-btn\"></span>\n                    \n                    Contato</a></div>\n        </div>\n    </nav>\n</section>",
          "_styles": {
            ".navbar": {
              "padding": ".5rem 0",
              "background": "@menuBgColor",
              "transition": "none",
              "min-height": "77px"
            },
            ".navbar-dropdown.bg-color.transparent.opened": {
              "background": "@menuBgColor"
            },
            "a": {
              "font-style": "normal"
            },
            ".nav-item": {
              "& span": {
                "padding-right": "0.4em",
                "line-height": "0.5em",
                "vertical-align": "text-bottom",
                "position": "relative",
                "text-decoration": "none"
              },
              "& a": {
                "display": "flex",
                "align-items": "center",
                "justify-content": "center",
                "padding": "0.7rem 0 !important",
                "margin": "0rem .65rem !important"
              }
            },
            ".nav-item:focus, .nav-link:focus": {
              "outline": "none"
            },
            ".btn": {
              "padding": "0.4rem 1.5rem",
              ".mbr-iconfont": {
                "font-size": "1.6rem"
              },
              "display": "inline-flex",
              "align-items": "center"
            },
            ".menu-logo": {
              "margin-right": "auto",
              ".navbar-brand": {
                "display": "flex",
                "margin-left": "5rem",
                "padding": "0",
                "transition": "padding .2s",
                "min-height": "3.8rem",
                "align-items": "center",
                ".navbar-caption-wrap": {
                  "display": "-webkit-flex",
                  "-webkit-align-items": "center",
                  "align-items": "center",
                  "word-break": "break-word",
                  "min-width": "7rem",
                  "margin": ".3rem 0",
                  ".navbar-caption": {
                    "line-height": "1.2rem !important",
                    "padding-right": "2rem"
                  }
                },
                ".navbar-logo": {
                  "font-size": "4rem",
                  "transition": "font-size 0.25s",
                  "& img": {
                    "display": "flex"
                  },
                  ".mbr-iconfont": {
                    "transition": "font-size 0.25s"
                  }
                }
              }
            },
            ".navbar-toggleable-sm .navbar-collapse": {
              "justify-content": "flex-end",
              "-webkit-justify-content": "flex-end",
              "padding-right": "5rem",
              "width": "auto",
              ".navbar-nav": {
                "flex-wrap": "wrap",
                "-webkit-flex-wrap": "wrap",
                "padding-left": "0",
                ".nav-item": {
                  "-webkit-align-self": "center",
                  "align-self": "center"
                }
              },
              ".navbar-buttons": {
                "padding-left": "0",
                "padding-bottom": "0"
              }
            },
            ".dropdown": {
              ".dropdown-menu": {
                "background": "@menuBgColor",
                "display": "none",
                "position": "absolute",
                "min-width": "5rem",
                "padding-top": "1.4rem",
                "padding-bottom": "1.4rem",
                "text-align": "left",
                ".dropdown-item": {
                  "width": "auto",
                  "padding": "0.235em 1.5385em 0.235em 1.5385em !important",
                  "&::after": {
                    "right": "0.5rem"
                  }
                },
                ".dropdown-submenu": {
                  "margin": "0"
                }
              },
              "&.open > .dropdown-menu": {
                "display": "block"
              }
            },
            ".navbar-toggleable-sm": {
              "&.opened:after": {
                "position": "absolute",
                "width": "100vw",
                "height": "100vh",
                "content": "''",
                "background-color": "rgba(0, 0, 0, 0.1)",
                "left": "0",
                "bottom": "0",
                "transform": "translateY(100%)",
                "-webkit-transform": "translateY(100%)",
                "z-index": "1000"
              }
            },
            ".navbar.navbar-short": {
              "min-height": "60px",
              "transition": "all .2s",
              "& .navbar-toggler-right": {
                "top": "20px"
              },
              "& .navbar-logo a": {
                "font-size": "2.5rem !important",
                "line-height": "2.5rem",
                "transition": "font-size 0.25s",
                "& .mbr-iconfont": {
                  "font-size": "2.5rem !important"
                },
                "& img": {
                  "height": "3rem !important"
                }
              },
              "& .navbar-brand": {
                "min-height": "3rem"
              }
            },
            "button.navbar-toggler": {
              "width": "31px",
              "height": "18px",
              "cursor": "pointer",
              "transition": "all .2s",
              "top": "1.5rem",
              "right": "1rem",
              "&:focus": {
                "outline": "none"
              },
              ".hamburger span": {
                "position": "absolute",
                "right": "0",
                "width": "30px",
                "height": "2px",
                "border-right": "5px",
                "background-color": "@hamburgerColor",
                "&:nth-child(1)": {
                  "top": "0",
                  "transition": "all .2s"
                },
                "&:nth-child(2)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(3)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(4)": {
                  "top": "16px",
                  "transition": "all .2s"
                }
              }
            },
            "nav.opened .hamburger span": {
              "&:nth-child(1)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              },
              "&:nth-child(2)": {
                "-webkit-transform": "rotate(45deg)",
                "transform": "rotate(45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(3)": {
                "-webkit-transform": "rotate(-45deg)",
                "transform": "rotate(-45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(4)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              }
            },
            ".collapsed": {
              "&.navbar-expand": {
                "flex-direction": "column"
              },
              ".btn": {
                "display": "flex"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (max-width: 991px)": {
              ".navbar-expand": {
                "flex-direction": "column"
              },
              "img": {
                "height": "3.8rem !important"
              },
              ".btn": {
                "display": "flex"
              },
               ".btn-secundary": {
                "display": "none",
                "align-content": "center"
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (min-width: 767px)": {
              ".menu-logo": {
                "flex-shrink": "0"
              }
            },
            ".navbar-collapse": {
              "flex-basis": "auto"
            },
            ".nav-link:hover, .dropdown-item:hover": {
              "color": "@itemsHoverColor !important"
            }
          },
          "_cid": "qKXgHenCD7",
          "_anchor": "menu1-e",
          "_protectedParams": [],
          "_global": true,
          "_once": "menu",
          "_params": {}
        },
        {
          "_name": "header2",
          "_customHTML": "<section group=\"Headers\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{\n         'mbr-fullscreen': fullScreen,\n         'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"checkbox\" title=\"Full Screen\" name=\"fullScreen\" checked>\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"9\" step=\"1\" value=\"6\" condition=\"fullScreen == false\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"9\" step=\"1\" value=\"6\" condition=\"fullScreen == false\">\n        <input type=\"checkbox\" title=\"Show Arrow\" name=\"showArrow\" checked>\n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubTitle\">\n        <input type=\"checkbox\" title=\"Show Text\" name=\"showText\">\n        <input type=\"checkbox\" title=\"Show Buttons\" name=\"showButtons\" checked>\n\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"@PROJECT_PATH@/assets/images/mbr-1620x1080.jpg\" parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#073B4C\">\n            <input type=\"video\" title=\"Background Video\" value=\"https://www.youtube.com/watch?v=iGpuQ0ioPrM\" selected>\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\" checked>\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#767676\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.4\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type !== 'color'\" opacity=\"{{overlayOpacity}}\" bg-color=\"{{overlayColor}}\"></div>\n\n    <div class=\"container align-center\">\n        <div class=\"row justify-content-md-center\">\n            <div class=\"mbr-white col-md-10\">\n                <h1 class=\"mbr-section-title mbr-bold pb-3 mbr-fonts-style\" mbr-theme-style=\"display-1\" mbr-if=\"showTitle\">Qual dos meus <br>projetos é o <br>meu preferido?<br><span style=\"font-weight: normal;\">Aquele que <br>vou começar <br>amanhã</span>.</h1>\n                <h3 class=\"mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style\" mbr-theme-style=\"display-2\" mbr-if=\"showSubTitle\">\n                    Beautiful mobile websites\n                </h3>\n                <p class=\"mbr-text pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" mbr-if=\"showText\" data-app-selector=\".mbr-text, .mbr-section-btn\">\n                    Click any text to edit or style it. Select text to insert a link. Click blue \"Gear\" icon in the top right corner to hide/show buttons, text, title and change the block background. Click red \"+\" in the bottom right corner to add a new block. Use the top left menu to create new pages, sites and add themes.\n                </p>\n                <div mbr-buttons mbr-theme-style=\"display-4\" class=\"mbr-section-btn\" mbr-if=\"showButtons\" data-toolbar=\"-mbrBtnMove\"><a class=\"btn btn-md btn-primary\" href=\"trajeto.html\">Quem sou eu?</a></div>\n            </div>\n        </div>\n    </div>\n    <div mbr-if=\"showArrow\" class=\"mbr-arrow hidden-sm-down\" aria-hidden=\"true\">\n        <a href=\"#next\">\n            <i class=\"mbri-down mbr-iconfont\"></i>\n        </a>\n    </div>\n</section>",
          "_styles": {
            "& when not (@fullScreen)": {
              "padding-top": "(@paddingTop * 15px)",
              "padding-bottom": "(@paddingBottom * 15px)"
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            "H1": {
              "text-align": "right",
              "color": "#ffffff"
            }
          },
          "_cid": "qKXgHfei96",
          "_anchor": "header2-f",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "background-color": "@bgColor",
            ".mbr-text, blockquote": {
              "color": "#767676"
            },
            "DIV": {
              "text-align": "left"
            },
            "BLOCKQUOTE": {
              "color": "#465052"
            }
          },
          "_name": "content2",
          "_customHTML": "<section class=\"mbr-section article content1\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"6\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"0\">\n        <input type=\"color\" title=\"Background Color\" name=\"bgColor\" value=\"#ffffff\">\n    <!-- End block parameters -->\n    </mbr-parameters> \n\n    <div class=\"container\">\n        <div class=\"media-container-row\">\n            <div class=\"mbr-text col-12 col-md-8 mbr-fonts-style\" mbr-theme-style=\"display-7\" data-multiline mbr-article>\n                <blockquote><p>Seja <b>bem-vindo</b> ao meu site pessoal. Quero aqui mostrar um pouco sobre minha história, carreira profissional, experiências, premiações, projetos, serviços voluntários e facilitar a comunicação entre eu e você. <b>Esse site é pessoal </b>e só deverá ser acessado através dos links das minhas redes sociais, meus sites, curriculos ou artigos. </p><p><b>Por gentileza, não compartilhe o endereço desse site sem meu consentimento.</b></p></blockquote>\n            </div>\n        </div>\n    </div>\n</section>",
          "_cid": "qKXgZ02fsW",
          "_anchor": "content2-h",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "background": "@bgColor",
            ".media-container-row": {
              "margin": "0 auto",
              "align-items": "stretch",
              ".img-item": {
                "display": "flex",
                "flex-direction": "column",
                "justify-content": "center",
                "position": "relative",
                "width": "100%",
                "z-index": "1",
                ".img-cont": {
                  "position": "relative",
                  "overflow": "hidden",
                  "img": {
                    "width": "100%"
                  },
                  ".img-caption": {
                    "position": "absolute",
                    "bottom": "0",
                    "width": "100%",
                    "z-index": "2",
                    "padding": "1rem 1rem",
                    "word-break": "break-word",
                    "p": {
                      "margin-bottom": "0"
                    }
                  }
                },
                "&.item1": {
                  "padding": "0 2rem 0 0"
                }
              }
            },
            "@media (max-width: 992px)": {
              ".img-item": {
                "width": "100% !important",
                "&.item1": {
                  "width": "100%",
                  "flex-basis": "initial !important",
                  "padding": "0 0 2rem 0 !important"
                }
              }
            },
            "P": {
              "color": "#efefef",
              "text-align": "right"
            },
            "I": {
              "color": "#efefef"
            },
            "B": {
              "color": "#efefef"
            }
          },
          "_name": "content15",
          "_customHTML": "<section>\n    <mbr-parameters>\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"3\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"8\">\n        <input type=\"range\" inline title=\"Width\" name=\"contentWidth\" min=\"66\" max=\"100\" value=\"66\" step=\"1\">\n        <input type=\"range\" inline title=\"Sizes\" name=\"proportions\" min=\"30\" max=\"300\" value=\"62\" step=\"1\">\n        <input type=\"checkbox\" title=\"Show Caption\" name=\"showCaption\" checked>\n        <input type=\"color\" title=\"Background Color\" name=\"bgColor\" value=\"#ffffff\">\n    </mbr-parameters>\n    <div class=\"container\">\n            <div class=\"media-container-row\" mbr-style=\"{'width':contentWidth+'%'}\">\n                <div class=\"img-item item1\" mbr-style=\"{'width':proportions+'%'}\">\n                    <div class=\"img-cont\">\n                        <a href=\"assets/files/CV - Alisson.pdf\"><img src=\"@PROJECT_PATH@/assets/images/download-5-600x450.png\" alt=\"Alisson Pelizaro\" title=\"Alisson Pelizaro\"></a>\n                        <div class=\"img-caption\" mbr-if=\"showCaption\">\n                            <p class=\"mbr-fonts-style align-left mbr-white\" mbr-theme-style=\"display-7\"><i>\n                                Meu currículo</i></p>\n                        </div>\n                    </div>\n\n                </div>\n                <div class=\"img-item\">\n                    <div class=\"img-cont\">\n                        <a href=\"trajeto.html\"><img src=\"@PROJECT_PATH@/assets/images/mbr-2-1618x1080.jpg\" alt title></a>\n                        <div class=\"img-caption\" mbr-if=\"showCaption\">\n                            <p class=\"mbr-fonts-style align-left mbr-white\" mbr-theme-style=\"display-4\"><i>\n                                Meu trajeto</i></p>\n                        </div>\n                    </div>\n                </div>\n            </div>\n    </div>\n</section>",
          "_cid": "qKXElZbBLC",
          "_anchor": "content15-j",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_name": "footer1",
          "_customHTML": "<section group=\"Footers\" mbr-class=\"{'mbr-reveal': reveal, 'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->  \n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"checkbox\" title=\"Show Copyright\" name=\"showCopyright\" checked>\n        <select title=\"Icons\" name=\"iconsCount\">\n            <option value=\"0\">0</option>\n            <option value=\"1\">1</option>\n            <option value=\"2\">2</option>\n            <option value=\"3\">3</option>\n            <option value=\"4\">4</option>\n            <option value=\"5\">5</option>\n            <option value=\"6\" selected>6</option>\n        </select>\n        <input type=\"checkbox\" title=\"Reveal effect\" name=\"reveal\" checked>\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/jumbotron.jpg\">\n            <input type=\"color\" title=\"Background Color\" value=\"#2e2e2e\" selected>\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\" checked>\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#3C3C3C\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.5\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type !== 'color'\" opacity=\"{{overlayOpacity}}\" bg-color=\"{{overlayColor}}\"></div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row content text-white\">\n            <div class=\"col-12 col-md-3\">\n                <div class=\"media-wrap\">\n                    <a href=\"https://mobirise.com/\">\n                        <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" title>\n                    </a>\n                </div>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\"></h5>\n                <p class=\"mbr-text\"></p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Contato</h5>\n                <p class=\"mbr-text\"><i>\n                    Email</i>: alissonpelizaro@hotmail.com\n<br><i>Celular:<br></i>+55 (41) 9 9147-0618</p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Mapa do site</h5>\n                <p class=\"mbr-text\">\n                    <a class=\"text-primary\" href=\"index.html\">Bem-vindo\n</a><br><a href=\"blog.html\">Blog</a><br><a href=\"portfolio.html\">Portfólio</a><br><a href=\"trajeto.html\">Meu trajeto</a><br><a href=\"contato.html\">Contato</a><br></p>\n            </div>\n        </div>\n        <div class=\"footer-lower\" mbr-if=\"showCopyright\">\n            <div class=\"media-container-row\">\n                <div class=\"col-sm-12\">\n                    <hr>\n                </div>\n            </div>\n            <div class=\"media-container-row mbr-white\">\n                <div class=\"col-sm-6 copyright\">\n                    <p class=\"mbr-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".copyright > p\">\n                        © Copyright 2018 - Todos os direitos reservados</p>\n                </div>\n                <div class=\"col-md-6\">\n                    <div class=\"social-list align-right\" mbr-if=\"iconsCount > 0\">\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>0\">\n                            <a href=\"https://twitter.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon class=\"mbr-iconfont mbr-iconfont-social socicon-twitter socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>1\">\n                            <a href=\"https://www.facebook.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon class=\"mbr-iconfont mbr-iconfont-social socicon-facebook socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>2\">\n                            <a href=\"https://github.com/alissonpelizaro\" target=\"_blank\">\n                                <span mbr-icon class=\"mbr-iconfont mbr-iconfont-social socicon-github socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>3\">\n                            <a href=\"https://instagram.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon class=\"mbr-iconfont mbr-iconfont-social socicon-instagram socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>4\">\n                            <a href=\"https://www.linkedin.com/in/alisson-pelizaro/\" target=\"_blank\">\n                                <span mbr-icon class=\"mbr-iconfont mbr-iconfont-social socicon-linkedin socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>5\">\n                            <a href=\"https://pt.stackoverflow.com/users/99799/alisson-pelizaro\" target=\"_blank\">\n                                <span mbr-icon class=\"mbr-iconfont mbr-iconfont-social socicon-stackoverflow socicon\"></span>\n                            </a>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            ".content": {
              "@media (max-width: 767px)": {
                "text-align": "center",
                "> div:not(:last-child)": {
                  "margin-bottom": "2rem"
                }
              }
            },
            ".media-wrap": {
              "@media (max-width: 767px)": {
                "margin-bottom": "1rem"
              },
              ".mbr-iconfont-logo": {
                "font-size": "7.5rem",
                "color": "#f36"
              },
              "img": {
                "height": "6rem"
              }
            },
            ".footer-lower": {
              ".copyright": {
                "@media (max-width: 767px)": {
                  "margin-bottom": "1rem",
                  "text-align": "center"
                }
              },
              "hr": {
                "margin": "1rem 0",
                "border-color": "#fff",
                "opacity": ".05"
              },
              ".social-list": {
                "padding-left": "0",
                "margin-bottom": "0",
                "list-style": "none",
                "display": "flex",
                "flex-wrap": "wrap",
                "justify-content": "flex-end",
                "-webkit-justify-content": "flex-end",
                ".mbr-iconfont-social": {
                  "font-size": "1.3rem",
                  "color": "#fff"
                },
                ".soc-item": {
                  "margin": "0 .5rem"
                },
                "a": {
                  "margin": "0",
                  "opacity": ".5",
                  "-webkit-transition": ".2s linear",
                  "transition": ".2s linear",
                  "&:hover": {
                    "opacity": "1"
                  }
                },
                "@media (max-width: 767px)": {
                  "justify-content": "center",
                  "-webkit-justify-content": "center"
                }
              }
            },
            "I": {
              "color": "#cccccc"
            }
          },
          "_cid": "qKXgHfS7jf",
          "_anchor": "footer1-g",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        }
      ]
    },
    "trajeto.html": {
      "settings": {
        "meta_descr": "História e trajeto de vida do Alisson Pelizaro.",
        "title": "Meu trajeto | Alisson Pelizaro",
        "order": 6
      },
      "components": [
        {
          "_name": "menu1",
          "_customHTML": "<section class=\"menu\" group=\"Menu\" plugins=\"DropDown, TouchSwipe\" always-top global once=\"menu\" not-draggable position-absolute>\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"checkbox\" title=\"Show Logo\" name=\"showLogo\" checked>\n        <input type=\"range\" title=\"Logo Size\" inline name=\"logoSize\" min=\"3.8\" max=\"8\" step=\"0.1\" value=\"3.8\" condition=\"showLogo\">\n        <input type=\"checkbox\" title=\"Show Brand Name\" name=\"showBrand\" checked>\n        <input type=\"checkbox\" title=\"Show Menu Items\" name=\"showItems\" checked>\n        <input type=\"color\" title=\"Items Hover Color\" name=\"itemsHoverColor\" value=\"#c1c1c1\" condition=\"showItems\">\n        <input type=\"checkbox\" title=\"Show Button(s)\" name=\"showButtons\" checked>\n        <input type=\"checkbox\" title=\"Sticky\" name=\"sticky\" checked>\n        <input type=\"checkbox\" title=\"Collapsed\" name=\"collapsed\">\n        <input type=\"checkbox\" title=\"Transparent\" name=\"transparent\">\n        <input type=\"color\" title=\"Hamburger Color\" name=\"hamburgerColor\" value=\"#ffffff\">\n        <input type=\"color\" title=\"Background Color\" name=\"menuBgColor\" value=\"#333333\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <nav class=\"navbar navbar-expand beta-menu navbar-dropdown align-items-center\" mbr-class=\"{'navbar-fixed-top': sticky,\n        'navbar-toggleable-sm': !collapsed,\n        'collapsed': collapsed,\n        'bg-color transparent': transparent}\">\n        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n            <div class=\"hamburger\">\n                <span></span>\n                <span></span>\n                <span></span>\n                <span></span>\n            </div>\n        </button>\n        <div class=\"menu-logo\">\n            <div class=\"navbar-brand\">\n                <span mbr-if=\"showLogo\" class=\"navbar-logo\">\n                    <a href=\"https://mobirise.com\">\n                         <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" mbr-style=\"{'height': logoSize + 'rem'}\" title>\n                    </a>\n                </span>\n                <span mbr-if=\"showBrand\" mbr-buttons mbr-theme-style=\"display-5\" class=\"navbar-caption-wrap\" data-toolbar=\"-mbrBtnMove,-mbrBtnAdd,-mbrBtnRemove\"><a class=\"navbar-caption text-white\" data-app-selector=\".navbar-caption\" href=\"index.html\"><br>Alisson Pelizaro</a></span>\n            </div>\n        </div>\n        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">\n            <ul mbr-if=\"showItems\" mbr-menu class=\"navbar-nav nav-dropdown\" mbr-theme-style=\"display-4\" mbr-class=\"{'nav-right': !showButtons,'navbar-nav-top-padding': isPublish && !showBrand && !showLogo}\"><li class=\"nav-item\">\n                    <a class=\"nav-link link text-white\" href=\"assets/files/CV%20-%20Alisson.pdf\" data-app-selector=\".nav-link,.dropdown-item\"><span class=\"mbri-download mbr-iconfont mbr-iconfont-btn\"></span>\n                        \n                        Currículo</a>\n                </li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"portfolio.html\" data-app-selector=\".nav-link,.dropdown-item\">Portfólio</a></li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"blog.html\" data-app-selector=\".nav-link,.dropdown-item\">\n                        \n                        Blog</a></li></ul>\n            <div mbr-if=\"showButtons\" mbr-buttons mbr-theme-style=\"display-4\" class=\"navbar-buttons mbr-section-btn\"><a class=\"btn btn-sm btn-primary\" href=\"contato.html\"><span class=\"mbri-paper-plane mbr-iconfont mbr-iconfont-btn\"></span>\n                    \n                    Contato</a></div>\n        </div>\n    </nav>\n</section>",
          "_styles": {
            ".navbar": {
              "padding": ".5rem 0",
              "background": "@menuBgColor",
              "transition": "none",
              "min-height": "77px"
            },
            ".navbar-dropdown.bg-color.transparent.opened": {
              "background": "@menuBgColor"
            },
            "a": {
              "font-style": "normal"
            },
            ".nav-item": {
              "& span": {
                "padding-right": "0.4em",
                "line-height": "0.5em",
                "vertical-align": "text-bottom",
                "position": "relative",
                "text-decoration": "none"
              },
              "& a": {
                "display": "flex",
                "align-items": "center",
                "justify-content": "center",
                "padding": "0.7rem 0 !important",
                "margin": "0rem .65rem !important"
              }
            },
            ".nav-item:focus, .nav-link:focus": {
              "outline": "none"
            },
            ".btn": {
              "padding": "0.4rem 1.5rem",
              ".mbr-iconfont": {
                "font-size": "1.6rem"
              },
              "display": "inline-flex",
              "align-items": "center"
            },
            ".menu-logo": {
              "margin-right": "auto",
              ".navbar-brand": {
                "display": "flex",
                "margin-left": "5rem",
                "padding": "0",
                "transition": "padding .2s",
                "min-height": "3.8rem",
                "align-items": "center",
                ".navbar-caption-wrap": {
                  "display": "-webkit-flex",
                  "-webkit-align-items": "center",
                  "align-items": "center",
                  "word-break": "break-word",
                  "min-width": "7rem",
                  "margin": ".3rem 0",
                  ".navbar-caption": {
                    "line-height": "1.2rem !important",
                    "padding-right": "2rem"
                  }
                },
                ".navbar-logo": {
                  "font-size": "4rem",
                  "transition": "font-size 0.25s",
                  "& img": {
                    "display": "flex"
                  },
                  ".mbr-iconfont": {
                    "transition": "font-size 0.25s"
                  }
                }
              }
            },
            ".navbar-toggleable-sm .navbar-collapse": {
              "justify-content": "flex-end",
              "-webkit-justify-content": "flex-end",
              "padding-right": "5rem",
              "width": "auto",
              ".navbar-nav": {
                "flex-wrap": "wrap",
                "-webkit-flex-wrap": "wrap",
                "padding-left": "0",
                ".nav-item": {
                  "-webkit-align-self": "center",
                  "align-self": "center"
                }
              },
              ".navbar-buttons": {
                "padding-left": "0",
                "padding-bottom": "0"
              }
            },
            ".dropdown": {
              ".dropdown-menu": {
                "background": "@menuBgColor",
                "display": "none",
                "position": "absolute",
                "min-width": "5rem",
                "padding-top": "1.4rem",
                "padding-bottom": "1.4rem",
                "text-align": "left",
                ".dropdown-item": {
                  "width": "auto",
                  "padding": "0.235em 1.5385em 0.235em 1.5385em !important",
                  "&::after": {
                    "right": "0.5rem"
                  }
                },
                ".dropdown-submenu": {
                  "margin": "0"
                }
              },
              "&.open > .dropdown-menu": {
                "display": "block"
              }
            },
            ".navbar-toggleable-sm": {
              "&.opened:after": {
                "position": "absolute",
                "width": "100vw",
                "height": "100vh",
                "content": "''",
                "background-color": "rgba(0, 0, 0, 0.1)",
                "left": "0",
                "bottom": "0",
                "transform": "translateY(100%)",
                "-webkit-transform": "translateY(100%)",
                "z-index": "1000"
              }
            },
            ".navbar.navbar-short": {
              "min-height": "60px",
              "transition": "all .2s",
              "& .navbar-toggler-right": {
                "top": "20px"
              },
              "& .navbar-logo a": {
                "font-size": "2.5rem !important",
                "line-height": "2.5rem",
                "transition": "font-size 0.25s",
                "& .mbr-iconfont": {
                  "font-size": "2.5rem !important"
                },
                "& img": {
                  "height": "3rem !important"
                }
              },
              "& .navbar-brand": {
                "min-height": "3rem"
              }
            },
            "button.navbar-toggler": {
              "width": "31px",
              "height": "18px",
              "cursor": "pointer",
              "transition": "all .2s",
              "top": "1.5rem",
              "right": "1rem",
              "&:focus": {
                "outline": "none"
              },
              ".hamburger span": {
                "position": "absolute",
                "right": "0",
                "width": "30px",
                "height": "2px",
                "border-right": "5px",
                "background-color": "@hamburgerColor",
                "&:nth-child(1)": {
                  "top": "0",
                  "transition": "all .2s"
                },
                "&:nth-child(2)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(3)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(4)": {
                  "top": "16px",
                  "transition": "all .2s"
                }
              }
            },
            "nav.opened .hamburger span": {
              "&:nth-child(1)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              },
              "&:nth-child(2)": {
                "-webkit-transform": "rotate(45deg)",
                "transform": "rotate(45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(3)": {
                "-webkit-transform": "rotate(-45deg)",
                "transform": "rotate(-45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(4)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              }
            },
            ".collapsed": {
              "&.navbar-expand": {
                "flex-direction": "column"
              },
              ".btn": {
                "display": "flex"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (max-width: 991px)": {
              ".navbar-expand": {
                "flex-direction": "column"
              },
              "img": {
                "height": "3.8rem !important"
              },
              ".btn": {
                "display": "flex"
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (min-width: 767px)": {
              ".menu-logo": {
                "flex-shrink": "0"
              }
            },
            ".navbar-collapse": {
              "flex-basis": "auto"
            },
            ".nav-link:hover, .dropdown-item:hover": {
              "color": "@itemsHoverColor !important"
            }
          },
          "_cid": "qKXgHenCD7",
          "_anchor": "menu1-l",
          "_protectedParams": [],
          "_global": true,
          "_once": "menu",
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "H2": {
              "color": "#72abbe"
            },
            ".mbr-section-subtitle I": {
              "color": "#787324"
            }
          },
          "_name": "content5",
          "_customHTML": "<section class=\"mbr-section content5\" group=\"Article\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"8\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"6\">\n\n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubtitle\" checked>\n        <input type=\"checkbox\" title=\"Show Text\" name=\"showText\">\n        <input type=\"checkbox\" title=\"Show Buttons\" name=\"showButtons\">\n\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"@PROJECT_PATH@/assets/images/mbr-2-1618x1080.jpg\" selected parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#0f7699\">\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\" checked>\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#ffffff\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.4\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type !== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row\">\n            <div class=\"title col-12 col-md-8\">\n                <h2 mbr-if=\"showTitle\" class=\"align-center mbr-bold mbr-white pb-3 mbr-fonts-style\" mbr-theme-style=\"display-1\">\n                    <br>MINHA HISTÓRIA, MEU TRAJETO</h2>\n                <h3 mbr-if=\"showSubtitle\" class=\"mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-section-subtitle\"><i>Das alturas, o Eterno enxerga as profundezas. Não importa a distância, Ele sabe tudo sobre nós. (Salmo 138:6)</i></h3>\n                <p class=\"mbr-text align-center mbr-white pb-3 mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-text\" mbr-if=\"showText\" mbr-article data-multiline>\n                    Shape your future web project with sharp design and refine coded functions\n                </p>\n                <div class=\"mbr-section-btn align-center\" mbr-if=\"showButtons\" mbr-buttons mbr-theme-style=\"display-4\" data-toolbar=\"-mbrBtnMove\">\n                    <a class=\"btn btn-primary\" href=\"https://mobirise.com\">LEARN MORE</a>\n                    <a class=\"btn btn-white-outline\" href=\"https://mobirise.com\">LIVE DEMO</a>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_cid": "qO46HKH9W7",
          "_anchor": "content5-q",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "h2": {
              "text-align": "left"
            },
            "h4": {
              "text-align": "left",
              "font-weight": "500"
            },
            "p": {
              "color": "#767676",
              "text-align": "left"
            },
            ".aside-content": {
              "flex-basis": "100%"
            },
            ".block-content": {
              "display": "-webkit-flex",
              "flex-direction": "column",
              "-webkit-flex-direction": "column",
              "word-break": "break-word"
            },
            ".media": {
              "margin": "initial",
              "align-items": "center"
            },
            ".mbr-figure": {
              "align-self": "flex-start",
              "-webkit-align-self": "flex-start",
              "-webkit-flex-shrink": "0",
              "flex-shrink": "0"
            },
            ".card-img": {
              "padding-right": "2rem",
              "width": "auto"
            },
            ".card-img span": {
              "font-size": "72px",
              "color": "#707070"
            },
            "@media (min-width: 992px)": {
              ".mbr-figure": {
                "padding-right": "4rem",
                "& when (@reverseContent)": {
                  "padding-right": "0",
                  "padding-left": "4rem"
                }
              },
              ".media-container-row": {
                "& when (@reverseContent)": {
                  "-webkit-flex-direction": "row-reverse"
                }
              }
            },
            "@media (max-width: 991px)": {
              ".mbr-figure": {
                "padding-right": "0",
                "padding-bottom": "1rem",
                "margin-bottom": "2rem",
                "& when (@reverseContent)": {
                  "padding-bottom": "0",
                  "margin-bottom": "0",
                  "padding-top": "1rem",
                  "margin-top": "2rem"
                }
              },
              ".media-container-row": {
                "& when (@reverseContent)": {
                  "-webkit-flex-direction": "column-reverse"
                }
              }
            },
            "@media (max-width: 300px)": {
              ".card-img span": {
                "font-size": "40px !important"
              }
            },
            "H2": {
              "color": "#72abbe"
            }
          },
          "_name": "features11",
          "_customHTML": "<section class=\"features11\" group=\"Features\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"9\" step=\"1\" value=\"6\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"9\" step=\"1\" value=\"6\">\n\n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubtitle\" checked>\n        <input type=\"checkbox\" title=\"Show Text Header\" name=\"showTextHead\" checked>\n        <input type=\"checkbox\" title=\"Show Text\" name=\"showText\" checked>\n        <input type=\"checkbox\" title=\"Show Icons\" name=\"showIcons\" checked>\n        <input type=\"checkbox\" title=\"Media on Left/Right\" name=\"reverseContent\">\n        <input type=\"range\" inline title=\"Media Size\" name=\"mediaSize\" min=\"20\" max=\"80\" step=\"5\" value=\"45\">\n        <select title=\"Cards\" name=\"cardsAmount\">\n            <option value=\"1\" selected>1</option>\n            <option value=\"2\">2</option>\n        </select>\n\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/background2.jpg\" parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#f9f9f9\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" checked condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#ffffff\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.5\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n\n    <div class=\"container\">   \n        <div class=\"col-md-12\">\n            <div class=\"media-container-row\">\n                <div class=\"mbr-figure\" mbr-style=\"{'width': mediaSize + '%'}\">\n                    <img src=\"@PROJECT_PATH@/assets/images/12342313-861953453915375-6795646253996862939-n-405x545.jpg\" alt=\"Mobirise\" title>\n                </div>\n                <div class=\" align-left aside-content\">\n                    <h2 class=\"mbr-title pt-2 mbr-fonts-style\" mbr-theme-style=\"display-2\" mbr-if=\"showTitle\">\n                        Resumo</h2>\n                    <div class=\"mbr-section-text\">\n                        <p class=\"mbr-text mb-5 pt-3 mbr-light mbr-fonts-style\" mbr-theme-style=\"display-5\" mbr-if=\"showSubtitle\" data-app-selector=\".mbr-text\">Nascido em 1991 em Curitiba e amante de tecnologia desde o berço. Iniciou carreira na área da T.I aos 16 anos. Hoje cristão, casado e pai de um príncipe de 4 anos.<br></p>\n                    </div>\n\n                    <div class=\"block-content\" mbr-if=\"showTextHead||showText||showIcons\">\n                        <div class=\"card p-3 pr-3\">\n                            <div class=\"media\">\n                                <div class=\" align-self-center card-img pb-3\" mbr-if=\"showIcons\">\n                                    <span mbr-icon class=\"mbr-iconfont mbri-quote-left\" style=\"color: rgb(114, 171, 190);\"></span>\n                                </div>     \n                                <div class=\"media-body\">\n                                    <h4 class=\"card-title mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showTextHead\"></h4>\n                                </div>\n                            </div>                \n\n                            <div class=\"card-box\">\n                                <p class=\"block-text mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showText\"><i>\n                                   Este tem sido um de meus mantras - foco e simplicidade. O simples pode ser mais difícil do que o complexo: é preciso trabalhar duro para limpar seus pensamentos de forma a torná-los simples. Mas no final vale a pena, porque, quando chegamos lá, podemos mover montanhas.</i></p>\n                            </div>\n                        </div>\n\n                        <div class=\"card p-3 pr-3\" mbr-if=\"cardsAmount > 1\">\n                            <div class=\"media\">\n                                <div class=\"align-self-center card-img pb-3\" mbr-if=\"showIcons\">\n                                    <span mbr-icon class=\"mbri-drag-n-drop2 mbr-iconfont\"></span>\n                                </div>     \n                                <div class=\"media-body\">\n                                    <h4 class=\"card-title mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showTextHead\">\n                                        Easy and Simple to Use\n                                    </h4>\n                                </div>\n                            </div>                \n\n                            <div class=\"card-box\">\n                                <p class=\"block-text mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showText\">\n                                    Cut down the development time with drag-and-drop website builder. Drop the blocks into the page, edit content inline and publish - no technical skills required.\n                                </p>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div> \n    </div>          \n</section>",
          "_cid": "qO49aXXXlz",
          "_anchor": "features11-r",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            ".mbr-section-subtitle": {
              "color": "#767676",
              "text-align": "center",
              "font-weight": "300"
            },
            ".timeline-text-content": {
              "padding": "2rem 2.5rem",
              "background": "@timelineColor",
              "margin-right": "2rem",
              "p": {
                "margin-bottom": "0"
              },
              "transition": "all .4s"
            },
            ".timeline-element": {
              "margin-bottom": "50px",
              "position": "relative",
              "word-wrap": "break-word",
              "word-break": "break-word",
              "display": "-webkit-flex",
              "flex-direction": "row",
              "-webkit-flex-direction": "row",
              "&:hover": {
                ".timeline-text-content": {
                  "box-shadow": "0 7px 20px 0px rgba(0, 0, 0, 0.08)",
                  "transition": "all .4s"
                }
              }
            },
            ".reverse": {
              "flex-direction": "row-reverse",
              "-webkit-flex-direction": "row-reverse",
              ".timeline-text-content": {
                "margin-left": "2rem",
                "margin-right": "0"
              }
            },
            ".iconsBackground": {
              "position": "absolute",
              "left": "50%",
              "width": "60px",
              "height": "60px",
              "line-height": "30px",
              "text-align": "center",
              "border-radius": "50%",
              "display": "inline-block",
              "background-color": "@timelineColor",
              "top": "20px",
              "margin-left": "-30px"
            },
            ".mbr-iconfont": {
              "position": "absolute",
              "text-align": "center",
              "font-size": "35px",
              "display": "inline-block",
              "z-index": "3",
              "top": "13px",
              "left": "13px"
            },
            ".separline:before": {
              "top": "20px",
              "bottom": "0",
              "position": "absolute",
              "content": "\"\"",
              "width": "2px",
              "background-color": "@timelineColor",
              "left": "calc(50% ~\"-\" 1px)",
              "height": "calc(100% ~\"+\" 4rem)"
            },
            "@media (max-width: 768px)": {
              ".iconsBackground": {
                "left": "1.5rem"
              },
              ".separline:before": {
                "left": "calc(1.5rem ~\"-\" 1px)"
              },
              ".timeline-text-content": {
                "margin-left": "3rem !important",
                "margin-right": "0 !important"
              },
              ".reverse": {
                ".timeline-text-content": {
                  "margin-right": "0 !important"
                }
              }
            },
            ".mbr-section-title": {
              "color": "#72abbe"
            },
            ".mbr-timeline-title": {
              "color": "#72abbe"
            }
          },
          "_name": "timeline2",
          "_customHTML": "<section class=\"timeline2\" group=\"Timelines\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"6\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"6\">\n        \n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubtitle\" checked>\n        \n        <input type=\"color\" title=\"Timelines Color\" name=\"timelineColor\" value=\"#e7e7e7\">\n        <select title=\"Timelines count\" name=\"timelinesAmount\">\n            <option value=\"1\">1</option>\n            <option value=\"2\">2</option>\n            <option value=\"3\">3</option>\n            <option value=\"4\">4</option>\n            <option value=\"5\">5</option>\n            <option value=\"6\">6</option>\n            <option value=\"7\">7</option>\n            <option value=\"8\">8</option>\n            <option value=\"9\">9</option>\n            <option value=\"10\">10</option>\n            <option value=\"11\" selected>11</option>\n            <option value=\"12\">12</option>\n        </select>\n\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/img/03.jpg\">\n            <input type=\"color\" title=\"Background Color\" value=\"#f8f8f8\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" checked condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#cccccc\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.9\" condition=\"overlay && bg.type !== 'color'\">\n        <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n\n    <div class=\"container align-center\">\n        <h2 class=\"mbr-section-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-2\" mbr-if=\"showTitle\" data-app-selector=\".mbr-section-title\">Começando pelo começo</h2>\n        <h3 class=\"mbr-section-subtitle pb-5 mbr-fonts-style\" mbr-theme-style=\"display-5\" mbr-if=\"showSubtitle\" data-app-selector=\".mbr-section-subtitle\">\n            Era uma vez...</h3>\n\n        <div class=\"container timelines-container\" mbri-timelines>\n            <div class=\"row timeline-element reverse\" mbr-class=\"{'separline':timelinesAmount>1}\">      \n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbr-iconfont mbri-star\" style=\"color: rgb(114, 171, 190);\"></span>\n                </span>          \n                <div class=\"col-xs-12 col-md-6 align-left\">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">1991</h4>\n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">- Nasce em Curitiba, PR.</p>\n                     </div>\n                </div>\n            </div>\n\n            <div class=\"row timeline-element \" mbr-if=\"timelinesAmount>1\" mbr-class=\"{'separline':timelinesAmount>2}\">\n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbr-iconfont mbri-edit\" style=\"color: rgb(114, 171, 190);\"></span>\n                </span>\n                <div class=\"col-xs-12 col-md-6 align-left \">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">1994</h4>\n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">- Inicia o estudo no ensino médio.</p>\n                    </div>\n                </div>\n            </div> \n\n            <div class=\"row timeline-element reverse\" mbr-if=\"timelinesAmount>2\" mbr-class=\"{'separline':timelinesAmount>3}\">\n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbr-iconfont mbri-sites\" style=\"color: rgb(114, 171, 190);\"></span>\n                </span>\n                <div class=\"col-xs-12 col-md-6 align-left\">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">\n                            2005</h4>      \n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">- Constrói e publica seu primeiro <b>site</b>.</p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"row timeline-element \" mbr-if=\"timelinesAmount>3\" mbr-class=\"{'separline':timelinesAmount>4}\">\n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbr-iconfont mbri-briefcase\" style=\"color: rgb(114, 171, 190);\"></span>\n                </span>\n                <div class=\"col-xs-12 col-md-6 align-left \">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">\n                            2007</h4>\n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">- Inicia seu primeiro emprego como menor aprendiz tendo como responsabilidade toda a <b>T.I</b> e o <b>marketing digital</b> da empresa - um RH de Curitiba;<br><br>- Inicia um curso técnico de <b>Linux </b>e <b>Webdesign</b>.<br></p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"row timeline-element reverse\" mbr-if=\"timelinesAmount>4\" mbr-class=\"{'separline':timelinesAmount>5}\">\n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbr-iconfont mbri-edit\" style=\"color: rgb(114, 171, 190);\"></span>\n                </span>\n                <div class=\"col-xs-12 col-md-6 align-left\">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">\n                            2009</h4>\n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">- Se forma em <b>Linux </b>e <b>Webdesign</b>;<br><br>- Desliga-se do emprego de menor aprendiz;<br><br>-Se forma no ensino médio;<br></p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"row timeline-element\" mbr-if=\"timelinesAmount>5\" mbr-class=\"{'separline':timelinesAmount>6}\">\n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbr-iconfont mbri-briefcase\" style=\"color: rgb(114, 171, 190);\"></span>\n                </span>\n                <div class=\"col-xs-12 col-md-6 align-left \">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">\n                            2010</h4>\n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">\n                            - Inicia nova carreira na<b> T.I </b>da <a href=\"https://www.caixa.gov.br\" target=\"_blank\">Caixa Econômica Federal</a> em virtude da especialização do curso em <b>Linux</b>.</p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"row timeline-element reverse\" mbr-if=\"timelinesAmount>6\" mbr-class=\"{'separline':timelinesAmount>7}\">\n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbr-iconfont mbri-hearth\" style=\"color: rgb(114, 171, 190);\"></span>\n                </span>\n                <div class=\"col-xs-12 col-md-6 align-left\">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">\n                            2013</h4>\n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">- Inicia estudo superior em <b>Análise e Desenvolvimento de Sistemas</b>;<br><br>- Casou-se;&nbsp;<br><br>- Inicia curso técnico em <b>Lógica de programação</b>;<br><br>- Inicia curso técnico em <b>WebDesign</b>;<br><br>- Conclui curso técnico em <b>Lógica de programação</b>;\n<br>\n<br>- Conclui curso técnico em <b>WebDesign</b>,<br><br>- Tornou-se pai;<br></p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"row timeline-element\" mbr-if=\"timelinesAmount>7\" mbr-class=\"{'separline':timelinesAmount>8}\">\n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbr-iconfont mbri-briefcase\" style=\"color: rgb(114, 171, 190);\"></span>\n                </span>\n                <div class=\"col-xs-12 col-md-6 align-left \">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">\n                            2014</h4>\n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">- É promovido à <b>Analista de Suporte Avançado</b> na Caixa Econômica Federal;<br><br>- Inicia curso técnico em <b>Sistemas Operacionais</b>;\n<br>\n<br>- Inicia curso técnico em <b>Desenvolvimento C++</b>;<br><br>- Conclui curso técnico em <b>Sistemas Operacionais</b>; \n<br>\n<br>- Conclui curso técnico em <b>Desenvolvimento C++</b>,<br><br>- Se forma na faculdade de <b>Analise e Desenvolvimento de Sistemas</b>.</p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"row timeline-element reverse\" mbr-if=\"timelinesAmount>8\" mbr-class=\"{'separline':timelinesAmount>9}\">\n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbr-iconfont mbri-hot-cup\" style=\"color: rgb(114, 171, 190);\"></span>\n                </span>\n                <div class=\"col-xs-12 col-md-6 align-left\">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">\n                            2016</h4>\n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">\n                            - Inicia faculdade de <b>Teologia Cristã</b>;<br><br>- Abre uma empresa de <b>webdesign </b>e <b>marketing digital</b>;<br><br>- Migra de função no emprego e começa a atuar em <b>Suporte especializado</b> e <b>Desenvolvimento PHP</b>;</p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"row timeline-element\" mbr-if=\"timelinesAmount>9\" mbr-class=\"{'separline':timelinesAmount>10}\">\n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbr-iconfont mbri-rocket\" style=\"color: rgb(114, 171, 190);\"></span>\n                </span>\n                <div class=\"col-xs-12 col-md-6 align-left \">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">\n                            2017</h4> \n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">\n                            - Desliga-se da <b>T.I</b> da Caixa Econômica Federal para ingressar em um projeto no <a href=\"http://www.carneirocunha.adv.br\" target=\"_blank\">Grupo Carneiro Cunha</a>&nbsp;como <b>Desenvolvedor PHP Junior</b>;<br><br>- Criou seu primeiro <b>CRM</b> próprio sem <b>frameworks</b>.</p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"row timeline-element reverse\" mbr-if=\"timelinesAmount>10\" mbr-class=\"{'separline':timelinesAmount>11}\">\n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbr-iconfont mbri-briefcase\" style=\"color: rgb(114, 171, 190);\"></span>\n                </span>\n                <div class=\"col-xs-12 col-md-6 align-left\">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">\n                            2018</h4>\n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">\n                            - Finaliza-se o projeto do Grupo Carneiro Cunha;<br><br>- Fecha parceria com a empresa <b><a href=\"https://www.enterness.com\" target=\"_blank\">ENTERness Tecnologia</a></b>, minha atual casa, como <b>Desenvolvedor PHP Pleno</b>.</p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"row timeline-element\" mbr-if=\"timelinesAmount>11\">\n                <span class=\"iconsBackground\">\n                    <span mbr-icon class=\"mbri-new-file mbr-iconfont\"></span>\n                </span>\n                <div class=\"col-xs-12 col-md-6 align-left \">\n                    <div class=\"timeline-text-content\">\n                        <h4 class=\"mbr-timeline-title pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-timeline-title\">\n                            Awesome Reports\n                        </h4>\n                        <p class=\"mbr-timeline-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-timeline-text\">\n                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam erat libero, bibendum in libero tempor, luctus volutpat ligula. Integer fringilla porttitor pretium. Nam erat felis, iaculis id justo ut, ullamcorper feugiat elit. Proin vel lectus auctor, porttitor ligula vitae, convallis leo. In eget massa elit.\n                        </p>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_cid": "qO4bHxciPi",
          "_anchor": "timeline2-s",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value",
              "& when (@gradientBg)": {
                "background": "linear-gradient(45deg, @bg-value, @color2)"
              }
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            ".mbr-section-subtitle": {
              "color": "#767676"
            },
            ".btn": {
              "margin": "0 0 .5rem 0"
            },
            "& when (@reverseContent)": {
              ".content-row": {
                "flex-direction": "row-reverse"
              }
            },
            "H2": {
              "color": "#72abbe"
            }
          },
          "_name": "info1",
          "_customHTML": "<section class=\"mbr-section info1\" group=\"Info\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!--Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"6\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"6\">\n\n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubtitle\" checked>\n        <input type=\"checkbox\" title=\"Show Buttons\" name=\"showButtons\" checked>\n        <input type=\"checkbox\" title=\"Text on left/right\" name=\"reverseContent\">\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/img/04.jpg\">\n            <input type=\"color\" title=\"Background Color\" value=\"#ffffff\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Gradient Bg\" name=\"gradientBg\" condition=\"bg.type=='color'\">\n        <input type=\"color\" name=\"color2\" title=\"Color 2\" value=\"#cebfaf\" condition=\"bg.type=='color' && gradientBg\">\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" checked condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#efefef\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.8\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n    <div class=\"container\">\n        <div class=\"row justify-content-center content-row\">\n            <div class=\"media-container-column title col-12 col-lg-7 col-md-6\">\n                <h3 mbr-if=\"showSubtitle\" class=\"mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-section-subtitle\">\n                    Mais especificações técnicas em</h3>\n                <h2 mbr-if=\"showTitle\" class=\"align-left mbr-bold mbr-fonts-style\" mbr-theme-style=\"display-2\">\n                    MEU CURRÍCULO</h2>\n            </div>\n            <div class=\"media-container-column col-12 col-lg-3 col-md-4\">\n                <div class=\"mbr-section-btn align-right py-4\" mbr-if=\"showButtons\" mbr-buttons mbr-theme-style=\"display-4\" data-toolbar=\"-mbrBtnMove\"><a class=\"btn btn-primary\" href=\"assets/files/CV - Alisson.pdf\"><span class=\"mbri-download mbr-iconfont mbr-iconfont-btn\" style=\"color: rgb(255, 255, 255);\"></span>BAIXAR</a></div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_cid": "qOaOfzfka1",
          "_anchor": "info1-t",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            ".content": {
              "@media (max-width: 767px)": {
                "text-align": "center",
                "> div:not(:last-child)": {
                  "margin-bottom": "2rem"
                }
              }
            },
            ".media-wrap": {
              "@media (max-width: 767px)": {
                "margin-bottom": "1rem"
              },
              ".mbr-iconfont-logo": {
                "font-size": "7.5rem",
                "color": "#f36"
              },
              "img": {
                "height": "6rem"
              }
            },
            ".footer-lower": {
              ".copyright": {
                "@media (max-width: 767px)": {
                  "margin-bottom": "1rem",
                  "text-align": "center"
                }
              },
              "hr": {
                "margin": "1rem 0",
                "border-color": "#fff",
                "opacity": ".05"
              },
              ".social-list": {
                "padding-left": "0",
                "margin-bottom": "0",
                "list-style": "none",
                "display": "flex",
                "flex-wrap": "wrap",
                "justify-content": "flex-end",
                "-webkit-justify-content": "flex-end",
                ".mbr-iconfont-social": {
                  "font-size": "1.3rem",
                  "color": "#fff"
                },
                ".soc-item": {
                  "margin": "0 .5rem"
                },
                "a": {
                  "margin": "0",
                  "opacity": ".5",
                  "-webkit-transition": ".2s linear",
                  "transition": ".2s linear",
                  "&:hover": {
                    "opacity": "1"
                  }
                },
                "@media (max-width: 767px)": {
                  "justify-content": "center",
                  "-webkit-justify-content": "center"
                }
              }
            },
            "I": {
              "color": "#cccccc"
            }
          },
          "_name": "footer1",
          "_customHTML": "<section group=\"Footers\" mbr-class=\"{'mbr-reveal': reveal, 'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->  \n        <input type=\"range\" inline=\"\" title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"range\" inline=\"\" title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"checkbox\" title=\"Show Copyright\" name=\"showCopyright\" checked=\"\">\n        <select title=\"Icons\" name=\"iconsCount\">\n            <option value=\"0\">0</option>\n            <option value=\"1\">1</option>\n            <option value=\"2\">2</option>\n            <option value=\"3\">3</option>\n            <option value=\"4\">4</option>\n            <option value=\"5\">5</option>\n            <option value=\"6\" selected=\"\">6</option>\n        </select>\n        <input type=\"checkbox\" title=\"Reveal effect\" name=\"reveal\" checked=\"\">\n        <fieldset type=\"background\" name=\"bg\" parallax=\"\">\n            <input type=\"image\" title=\"Background Image\" value=\"@PROJECT_PATH@/assets/images/jumbotron.jpg\">\n            <input type=\"color\" title=\"Background Color\" value=\"#2e2e2e\" selected=\"\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\" checked=\"\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#3C3C3C\" condition=\"overlay &amp;&amp; bg.type !== 'color'\">\n        <input type=\"range\" inline=\"\" title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.5\" condition=\"overlay &amp;&amp; bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay &amp;&amp; bg.type !== 'color'\" opacity=\"{{overlayOpacity}}\" bg-color=\"{{overlayColor}}\"></div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row content text-white\">\n            <div class=\"col-12 col-md-3\">\n                <div class=\"media-wrap\">\n                    <a href=\"https://mobirise.com/\">\n                        <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" title=\"\">\n                    </a>\n                </div>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\"></h5>\n                <p class=\"mbr-text\"></p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Contato</h5>\n                <p class=\"mbr-text\"><i>\n                    Email</i>: alissonpelizaro@hotmail.com\n<br><i>Celular:<br></i>+55 (41) 9 9147-0618</p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Mapa do site</h5>\n                <p class=\"mbr-text\">\n                    <a class=\"text-primary\" href=\"index.html\">Bem-vindo\n</a><br><a href=\"blog.html\">Blog</a><br><a href=\"portfolio.html\">Portfólio</a><br><a href=\"trajeto.html\">Meu trajeto</a><br><a href=\"contato.html\">Contato</a><br></p>\n            </div>\n        </div>\n        <div class=\"footer-lower\" mbr-if=\"showCopyright\">\n            <div class=\"media-container-row\">\n                <div class=\"col-sm-12\">\n                    <hr>\n                </div>\n            </div>\n            <div class=\"media-container-row mbr-white\">\n                <div class=\"col-sm-6 copyright\">\n                    <p class=\"mbr-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".copyright > p\">\n                        © Copyright 2018 - Todos os direitos reservados</p>\n                </div>\n                <div class=\"col-md-6\">\n                    <div class=\"social-list align-right\" mbr-if=\"iconsCount > 0\">\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>0\">\n                            <a href=\"https://twitter.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-twitter socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>1\">\n                            <a href=\"https://www.facebook.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-facebook socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>2\">\n                            <a href=\"https://github.com/alissonpelizaro\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-github socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>3\">\n                            <a href=\"https://instagram.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-instagram socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>4\">\n                            <a href=\"https://www.linkedin.com/in/alisson-pelizaro/\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-linkedin socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>5\">\n                            <a href=\"https://pt.stackoverflow.com/users/99799/alisson-pelizaro\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-stackoverflow socicon\"></span>\n                            </a>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_anchor": "footer1-1x",
          "_isUserblock": true,
          "_cid": "qObHZfJBFG",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        }
      ]
    },
    "post-post.html": {
      "settings": {
        "meta_descr": "Blog com tutorias e diversas outros assuntos sobre tecnologia.",
        "title": "Título do Post | Blog | Alisson Pelizaro",
        "order": 2
      },
      "components": [
        {
          "_name": "menu1",
          "_customHTML": "<section class=\"menu\" group=\"Menu\" plugins=\"DropDown, TouchSwipe\" always-top global once=\"menu\" not-draggable position-absolute>\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"checkbox\" title=\"Show Logo\" name=\"showLogo\" checked>\n        <input type=\"range\" title=\"Logo Size\" inline name=\"logoSize\" min=\"3.8\" max=\"8\" step=\"0.1\" value=\"3.8\" condition=\"showLogo\">\n        <input type=\"checkbox\" title=\"Show Brand Name\" name=\"showBrand\" checked>\n        <input type=\"checkbox\" title=\"Show Menu Items\" name=\"showItems\" checked>\n        <input type=\"color\" title=\"Items Hover Color\" name=\"itemsHoverColor\" value=\"#c1c1c1\" condition=\"showItems\">\n        <input type=\"checkbox\" title=\"Show Button(s)\" name=\"showButtons\" checked>\n        <input type=\"checkbox\" title=\"Sticky\" name=\"sticky\" checked>\n        <input type=\"checkbox\" title=\"Collapsed\" name=\"collapsed\">\n        <input type=\"checkbox\" title=\"Transparent\" name=\"transparent\">\n        <input type=\"color\" title=\"Hamburger Color\" name=\"hamburgerColor\" value=\"#ffffff\">\n        <input type=\"color\" title=\"Background Color\" name=\"menuBgColor\" value=\"#333333\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <nav class=\"navbar navbar-expand beta-menu navbar-dropdown align-items-center\" mbr-class=\"{'navbar-fixed-top': sticky,\n        'navbar-toggleable-sm': !collapsed,\n        'collapsed': collapsed,\n        'bg-color transparent': transparent}\">\n        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n            <div class=\"hamburger\">\n                <span></span>\n                <span></span>\n                <span></span>\n                <span></span>\n            </div>\n        </button>\n        <div class=\"menu-logo\">\n            <div class=\"navbar-brand\">\n                <span mbr-if=\"showLogo\" class=\"navbar-logo\">\n                    <a href=\"https://mobirise.com\">\n                         <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" mbr-style=\"{'height': logoSize + 'rem'}\" title>\n                    </a>\n                </span>\n                <span mbr-if=\"showBrand\" mbr-buttons mbr-theme-style=\"display-5\" class=\"navbar-caption-wrap\" data-toolbar=\"-mbrBtnMove,-mbrBtnAdd,-mbrBtnRemove\"><a class=\"navbar-caption text-white\" data-app-selector=\".navbar-caption\" href=\"index.html\"><br>Alisson Pelizaro</a></span>\n            </div>\n        </div>\n        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">\n            <ul mbr-if=\"showItems\" mbr-menu class=\"navbar-nav nav-dropdown\" mbr-theme-style=\"display-4\" mbr-class=\"{'nav-right': !showButtons,'navbar-nav-top-padding': isPublish && !showBrand && !showLogo}\"><li class=\"nav-item\">\n                    <a class=\"nav-link link text-white\" href=\"assets/files/CV%20-%20Alisson.pdf\" data-app-selector=\".nav-link,.dropdown-item\"><span class=\"mbri-download mbr-iconfont mbr-iconfont-btn\"></span>\n                        \n                        Currículo</a>\n                </li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"portfolio.html\" data-app-selector=\".nav-link,.dropdown-item\">Portfólio</a></li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"blog.html\" data-app-selector=\".nav-link,.dropdown-item\">\n                        \n                        Blog</a></li></ul>\n            <div mbr-if=\"showButtons\" mbr-buttons mbr-theme-style=\"display-4\" class=\"navbar-buttons mbr-section-btn\"><a class=\"btn btn-sm btn-primary\" href=\"contato.html\"><span class=\"mbri-paper-plane mbr-iconfont mbr-iconfont-btn\"></span>\n                    \n                    Contato</a></div>\n        </div>\n    </nav>\n</section>",
          "_styles": {
            ".navbar": {
              "padding": ".5rem 0",
              "background": "@menuBgColor",
              "transition": "none",
              "min-height": "77px"
            },
            ".navbar-dropdown.bg-color.transparent.opened": {
              "background": "@menuBgColor"
            },
            "a": {
              "font-style": "normal"
            },
            ".nav-item": {
              "& span": {
                "padding-right": "0.4em",
                "line-height": "0.5em",
                "vertical-align": "text-bottom",
                "position": "relative",
                "text-decoration": "none"
              },
              "& a": {
                "display": "flex",
                "align-items": "center",
                "justify-content": "center",
                "padding": "0.7rem 0 !important",
                "margin": "0rem .65rem !important"
              }
            },
            ".nav-item:focus, .nav-link:focus": {
              "outline": "none"
            },
            ".btn": {
              "padding": "0.4rem 1.5rem",
              ".mbr-iconfont": {
                "font-size": "1.6rem"
              },
              "display": "inline-flex",
              "align-items": "center"
            },
            ".menu-logo": {
              "margin-right": "auto",
              ".navbar-brand": {
                "display": "flex",
                "margin-left": "5rem",
                "padding": "0",
                "transition": "padding .2s",
                "min-height": "3.8rem",
                "align-items": "center",
                ".navbar-caption-wrap": {
                  "display": "-webkit-flex",
                  "-webkit-align-items": "center",
                  "align-items": "center",
                  "word-break": "break-word",
                  "min-width": "7rem",
                  "margin": ".3rem 0",
                  ".navbar-caption": {
                    "line-height": "1.2rem !important",
                    "padding-right": "2rem"
                  }
                },
                ".navbar-logo": {
                  "font-size": "4rem",
                  "transition": "font-size 0.25s",
                  "& img": {
                    "display": "flex"
                  },
                  ".mbr-iconfont": {
                    "transition": "font-size 0.25s"
                  }
                }
              }
            },
            ".navbar-toggleable-sm .navbar-collapse": {
              "justify-content": "flex-end",
              "-webkit-justify-content": "flex-end",
              "padding-right": "5rem",
              "width": "auto",
              ".navbar-nav": {
                "flex-wrap": "wrap",
                "-webkit-flex-wrap": "wrap",
                "padding-left": "0",
                ".nav-item": {
                  "-webkit-align-self": "center",
                  "align-self": "center"
                }
              },
              ".navbar-buttons": {
                "padding-left": "0",
                "padding-bottom": "0"
              }
            },
            ".dropdown": {
              ".dropdown-menu": {
                "background": "@menuBgColor",
                "display": "none",
                "position": "absolute",
                "min-width": "5rem",
                "padding-top": "1.4rem",
                "padding-bottom": "1.4rem",
                "text-align": "left",
                ".dropdown-item": {
                  "width": "auto",
                  "padding": "0.235em 1.5385em 0.235em 1.5385em !important",
                  "&::after": {
                    "right": "0.5rem"
                  }
                },
                ".dropdown-submenu": {
                  "margin": "0"
                }
              },
              "&.open > .dropdown-menu": {
                "display": "block"
              }
            },
            ".navbar-toggleable-sm": {
              "&.opened:after": {
                "position": "absolute",
                "width": "100vw",
                "height": "100vh",
                "content": "''",
                "background-color": "rgba(0, 0, 0, 0.1)",
                "left": "0",
                "bottom": "0",
                "transform": "translateY(100%)",
                "-webkit-transform": "translateY(100%)",
                "z-index": "1000"
              }
            },
            ".navbar.navbar-short": {
              "min-height": "60px",
              "transition": "all .2s",
              "& .navbar-toggler-right": {
                "top": "20px"
              },
              "& .navbar-logo a": {
                "font-size": "2.5rem !important",
                "line-height": "2.5rem",
                "transition": "font-size 0.25s",
                "& .mbr-iconfont": {
                  "font-size": "2.5rem !important"
                },
                "& img": {
                  "height": "3rem !important"
                }
              },
              "& .navbar-brand": {
                "min-height": "3rem"
              }
            },
            "button.navbar-toggler": {
              "width": "31px",
              "height": "18px",
              "cursor": "pointer",
              "transition": "all .2s",
              "top": "1.5rem",
              "right": "1rem",
              "&:focus": {
                "outline": "none"
              },
              ".hamburger span": {
                "position": "absolute",
                "right": "0",
                "width": "30px",
                "height": "2px",
                "border-right": "5px",
                "background-color": "@hamburgerColor",
                "&:nth-child(1)": {
                  "top": "0",
                  "transition": "all .2s"
                },
                "&:nth-child(2)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(3)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(4)": {
                  "top": "16px",
                  "transition": "all .2s"
                }
              }
            },
            "nav.opened .hamburger span": {
              "&:nth-child(1)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              },
              "&:nth-child(2)": {
                "-webkit-transform": "rotate(45deg)",
                "transform": "rotate(45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(3)": {
                "-webkit-transform": "rotate(-45deg)",
                "transform": "rotate(-45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(4)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              }
            },
            ".collapsed": {
              "&.navbar-expand": {
                "flex-direction": "column"
              },
              ".btn": {
                "display": "flex"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (max-width: 991px)": {
              ".navbar-expand": {
                "flex-direction": "column"
              },
              "img": {
                "height": "3.8rem !important"
              },
              ".btn": {
                "display": "flex"
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (min-width: 767px)": {
              ".menu-logo": {
                "flex-shrink": "0"
              }
            },
            ".navbar-collapse": {
              "flex-basis": "auto"
            },
            ".nav-link:hover, .dropdown-item:hover": {
              "color": "@itemsHoverColor !important"
            }
          },
          "_cid": "qKXgHenCD7",
          "_anchor": "menu1-1a",
          "_protectedParams": [],
          "_global": true,
          "_once": "menu",
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "h2": {
              "text-align": "left"
            },
            "h4": {
              "text-align": "left",
              "font-weight": "500"
            },
            "p": {
              "color": "#767676",
              "text-align": "left"
            },
            ".aside-content": {
              "flex-basis": "100%"
            },
            ".block-content": {
              "display": "-webkit-flex",
              "flex-direction": "column",
              "-webkit-flex-direction": "column",
              "word-break": "break-word"
            },
            ".media": {
              "margin": "initial",
              "align-items": "center"
            },
            ".mbr-figure": {
              "align-self": "flex-start",
              "-webkit-align-self": "flex-start",
              "-webkit-flex-shrink": "0",
              "flex-shrink": "0"
            },
            ".card-img": {
              "padding-right": "2rem",
              "width": "auto"
            },
            ".card-img span": {
              "font-size": "72px",
              "color": "#707070"
            },
            "@media (min-width: 992px)": {
              ".mbr-figure": {
                "padding-right": "4rem",
                "& when (@reverseContent)": {
                  "padding-right": "0",
                  "padding-left": "4rem"
                }
              },
              ".media-container-row": {
                "& when (@reverseContent)": {
                  "-webkit-flex-direction": "row-reverse"
                }
              }
            },
            "@media (max-width: 991px)": {
              ".mbr-figure": {
                "padding-right": "0",
                "padding-bottom": "1rem",
                "margin-bottom": "2rem",
                "& when (@reverseContent)": {
                  "padding-bottom": "0",
                  "margin-bottom": "0",
                  "padding-top": "1rem",
                  "margin-top": "2rem"
                }
              },
              ".media-container-row": {
                "& when (@reverseContent)": {
                  "-webkit-flex-direction": "column-reverse"
                }
              }
            },
            "@media (max-width: 300px)": {
              ".card-img span": {
                "font-size": "40px !important"
              }
            },
            "H2": {
              "color": "#72abbe"
            }
          },
          "_name": "features11",
          "_customHTML": "<section class=\"features11\" group=\"Features\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"9\" step=\"1\" value=\"9\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"9\" step=\"1\" value=\"2\">\n\n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubtitle\" checked>\n        <input type=\"checkbox\" title=\"Show Text Header\" name=\"showTextHead\">\n        <input type=\"checkbox\" title=\"Show Text\" name=\"showText\" checked>\n        <input type=\"checkbox\" title=\"Show Icons\" name=\"showIcons\">\n        <input type=\"checkbox\" title=\"Media on Left/Right\" name=\"reverseContent\">\n        <input type=\"range\" inline title=\"Media Size\" name=\"mediaSize\" min=\"20\" max=\"80\" step=\"5\" value=\"50\">\n        <select title=\"Cards\" name=\"cardsAmount\">\n            <option value=\"1\">1</option>\n            <option value=\"2\" selected>2</option>\n        </select>\n\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/background2.jpg\" parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#ffffff\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" checked condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#ffffff\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.5\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n\n    <div class=\"container\">   \n        <div class=\"col-md-12\">\n            <div class=\"media-container-row\">\n                <div class=\"mbr-figure\" mbr-style=\"{'width': mediaSize + '%'}\">\n                    <img src=\"../_images/img/05.jpg\" alt=\"Mobirise\">\n                </div>\n                <div class=\" align-left aside-content\">\n                    <h2 class=\"mbr-title pt-2 mbr-fonts-style\" mbr-theme-style=\"display-2\" mbr-if=\"showTitle\">\n                        Titulo do post</h2>\n                    <div class=\"mbr-section-text\">\n                        <p class=\"mbr-text mb-5 pt-3 mbr-light mbr-fonts-style\" mbr-theme-style=\"display-5\" mbr-if=\"showSubtitle\" data-app-selector=\".mbr-text\">\n                        Breve resumo</p>\n                    </div>\n\n                    <div class=\"block-content\" mbr-if=\"showTextHead||showText||showIcons\">\n                        <div class=\"card p-3 pr-3\">\n                            <div class=\"media\">\n                                <div class=\" align-self-center card-img pb-3\" mbr-if=\"showIcons\">\n                                    <span mbr-icon class=\"mbri-extension mbr-iconfont\"></span>\n                                </div>     \n                                <div class=\"media-body\">\n                                    <h4 class=\"card-title mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showTextHead\">\n                                        Over 400 Amazing Blocks\n                                    </h4>\n                                </div>\n                            </div>                \n\n                            <div class=\"card-box\">\n                                <p class=\"block-text mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showText\">\n                                   Inicio do Post</p>\n                            </div>\n                        </div>\n\n                        <div class=\"card p-3 pr-3\" mbr-if=\"cardsAmount > 1\">\n                            <div class=\"media\">\n                                <div class=\"align-self-center card-img pb-3\" mbr-if=\"showIcons\">\n                                    <span mbr-icon class=\"mbri-drag-n-drop2 mbr-iconfont\"></span>\n                                </div>     \n                                <div class=\"media-body\">\n                                    <h4 class=\"card-title mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showTextHead\">\n                                        Easy and Simple to Use\n                                    </h4>\n                                </div>\n                            </div>                \n\n                            <div class=\"card-box\">\n                                <p class=\"block-text mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showText\"></p>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div> \n    </div>          \n</section>",
          "_cid": "qObzHhltRn",
          "_anchor": "features11-1b",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "background-color": "@bgColor",
            ".mbr-text, blockquote": {
              "color": "#767676"
            }
          },
          "_name": "content1",
          "_customHTML": "<section class=\"mbr-section article content1\">\n    \n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"1\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"color\" title=\"Background Color\" name=\"bgColor\" value=\"#ffffff\">\n    <!-- End block parameters -->\n    </mbr-parameters> \n\n    <div class=\"container\">\n        <div class=\"media-container-row\">\n            <div class=\"mbr-text col-12 col-md-8 mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-text\" data-multiline mbr-article><b>Continuação do post</b></div>\n        </div>\n    </div>\n</section>",
          "_cid": "qObA5Gxxay",
          "_anchor": "content1-1c",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_params": {
            "paddingTop": "3",
            "paddingBottom": "3",
            "socialFacebook": true,
            "postsNumber": "20",
            "socialGoogle": false,
            "socialDisqus": false,
            "shortName": "",
            "bgColorRadio": true,
            "bgColor": "#ffffff",
            "bgImageRadio": false,
            "bgImage": "@ADDONS_PATH@/facebook-comments/facebook-comments-block/assets/comments_bg.jpg",
            "overlay": true,
            "overlayColor": "#7e9b9f",
            "overlayOpacity": 0.6
          },
          "innerText": "<div class=\"facebookPlaceholder\" data-numposts=\"\"><h2>FACEBOOK COMMENTS WILL BE SHOWN ONLY WHEN YOUR SITE IS ONLINE</h2> <img src=\"@PROJECT_PATH@/assets/images/facebook-comments.jpg\"></div>",
          "innerTextGoogle": "<div class=\"googlePlaceholder\" data-numposts=\"\"><h2>GOOGLE COMMENTS WILL BE SHOWN ONLY WHEN YOUR SITE IS ONLINE</h2> <img src=\"@ADDONS_PATH@/facebook-comments/facebook-comments-block/assets/google-comments.jpg\"></div>",
          "innerTextDisqus": "<div class=\"disqusPlaceholder\" data-numposts=\"\"><h2>DISQUS COMMENTS WILL BE SHOWN ONLY WHEN YOUR SITE IS ONLINE</h2> <img src=\"@ADDONS_PATH@/facebook-comments/facebook-comments-block/assets/disqus-comments.jpg\"></div>",
          "alias": "facebook-comments",
          "_tags": [
            "Extension"
          ],
          "_name": "facebook-comments-block",
          "_anchor": "facebook-comments-block-1d"
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            ".content": {
              "@media (max-width: 767px)": {
                "text-align": "center",
                "> div:not(:last-child)": {
                  "margin-bottom": "2rem"
                }
              }
            },
            ".media-wrap": {
              "@media (max-width: 767px)": {
                "margin-bottom": "1rem"
              },
              ".mbr-iconfont-logo": {
                "font-size": "7.5rem",
                "color": "#f36"
              },
              "img": {
                "height": "6rem"
              }
            },
            ".footer-lower": {
              ".copyright": {
                "@media (max-width: 767px)": {
                  "margin-bottom": "1rem",
                  "text-align": "center"
                }
              },
              "hr": {
                "margin": "1rem 0",
                "border-color": "#fff",
                "opacity": ".05"
              },
              ".social-list": {
                "padding-left": "0",
                "margin-bottom": "0",
                "list-style": "none",
                "display": "flex",
                "flex-wrap": "wrap",
                "justify-content": "flex-end",
                "-webkit-justify-content": "flex-end",
                ".mbr-iconfont-social": {
                  "font-size": "1.3rem",
                  "color": "#fff"
                },
                ".soc-item": {
                  "margin": "0 .5rem"
                },
                "a": {
                  "margin": "0",
                  "opacity": ".5",
                  "-webkit-transition": ".2s linear",
                  "transition": ".2s linear",
                  "&:hover": {
                    "opacity": "1"
                  }
                },
                "@media (max-width: 767px)": {
                  "justify-content": "center",
                  "-webkit-justify-content": "center"
                }
              }
            },
            "I": {
              "color": "#cccccc"
            }
          },
          "_name": "footer1",
          "_customHTML": "<section group=\"Footers\" mbr-class=\"{'mbr-reveal': reveal, 'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->  \n        <input type=\"range\" inline=\"\" title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"range\" inline=\"\" title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"checkbox\" title=\"Show Copyright\" name=\"showCopyright\" checked=\"\">\n        <select title=\"Icons\" name=\"iconsCount\">\n            <option value=\"0\">0</option>\n            <option value=\"1\">1</option>\n            <option value=\"2\">2</option>\n            <option value=\"3\">3</option>\n            <option value=\"4\">4</option>\n            <option value=\"5\">5</option>\n            <option value=\"6\" selected=\"\">6</option>\n        </select>\n        <input type=\"checkbox\" title=\"Reveal effect\" name=\"reveal\" checked=\"\">\n        <fieldset type=\"background\" name=\"bg\" parallax=\"\">\n            <input type=\"image\" title=\"Background Image\" value=\"@PROJECT_PATH@/assets/images/jumbotron.jpg\">\n            <input type=\"color\" title=\"Background Color\" value=\"#2e2e2e\" selected=\"\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\" checked=\"\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#3C3C3C\" condition=\"overlay &amp;&amp; bg.type !== 'color'\">\n        <input type=\"range\" inline=\"\" title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.5\" condition=\"overlay &amp;&amp; bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay &amp;&amp; bg.type !== 'color'\" opacity=\"{{overlayOpacity}}\" bg-color=\"{{overlayColor}}\"></div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row content text-white\">\n            <div class=\"col-12 col-md-3\">\n                <div class=\"media-wrap\">\n                    <a href=\"https://mobirise.com/\">\n                        <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" title=\"\">\n                    </a>\n                </div>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\"></h5>\n                <p class=\"mbr-text\"></p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Contato</h5>\n                <p class=\"mbr-text\"><i>\n                    Email</i>: alissonpelizaro@hotmail.com\n<br><i>Celular:<br></i>+55 (41) 9 9147-0618</p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Mapa do site</h5>\n                <p class=\"mbr-text\">\n                    <a class=\"text-primary\" href=\"index.html\">Bem-vindo\n</a><br><a href=\"blog.html\">Blog</a><br><a href=\"portfolio.html\">Portfólio</a><br><a href=\"trajeto.html\">Meu trajeto</a><br><a href=\"contato.html\">Contato</a><br></p>\n            </div>\n        </div>\n        <div class=\"footer-lower\" mbr-if=\"showCopyright\">\n            <div class=\"media-container-row\">\n                <div class=\"col-sm-12\">\n                    <hr>\n                </div>\n            </div>\n            <div class=\"media-container-row mbr-white\">\n                <div class=\"col-sm-6 copyright\">\n                    <p class=\"mbr-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".copyright > p\">\n                        © Copyright 2018 - Todos os direitos reservados</p>\n                </div>\n                <div class=\"col-md-6\">\n                    <div class=\"social-list align-right\" mbr-if=\"iconsCount > 0\">\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>0\">\n                            <a href=\"https://twitter.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-twitter socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>1\">\n                            <a href=\"https://www.facebook.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-facebook socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>2\">\n                            <a href=\"https://github.com/alissonpelizaro\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-github socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>3\">\n                            <a href=\"https://instagram.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-instagram socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>4\">\n                            <a href=\"https://www.linkedin.com/in/alisson-pelizaro/\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-linkedin socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>5\">\n                            <a href=\"https://pt.stackoverflow.com/users/99799/alisson-pelizaro\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-stackoverflow socicon\"></span>\n                            </a>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_anchor": "footer1-1t",
          "_isUserblock": true,
          "_cid": "qObHN65zr5",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        }
      ]
    },
    "blog.html": {
      "settings": {
        "meta_descr": "Website Creator Description",
        "title": "Blog | Alisson Pelizaro",
        "order": 3
      },
      "components": [
        {
          "_name": "menu1",
          "_customHTML": "<section class=\"menu\" group=\"Menu\" plugins=\"DropDown, TouchSwipe\" always-top global once=\"menu\" not-draggable position-absolute>\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"checkbox\" title=\"Show Logo\" name=\"showLogo\" checked>\n        <input type=\"range\" title=\"Logo Size\" inline name=\"logoSize\" min=\"3.8\" max=\"8\" step=\"0.1\" value=\"3.8\" condition=\"showLogo\">\n        <input type=\"checkbox\" title=\"Show Brand Name\" name=\"showBrand\" checked>\n        <input type=\"checkbox\" title=\"Show Menu Items\" name=\"showItems\" checked>\n        <input type=\"color\" title=\"Items Hover Color\" name=\"itemsHoverColor\" value=\"#c1c1c1\" condition=\"showItems\">\n        <input type=\"checkbox\" title=\"Show Button(s)\" name=\"showButtons\" checked>\n        <input type=\"checkbox\" title=\"Sticky\" name=\"sticky\" checked>\n        <input type=\"checkbox\" title=\"Collapsed\" name=\"collapsed\">\n        <input type=\"checkbox\" title=\"Transparent\" name=\"transparent\">\n        <input type=\"color\" title=\"Hamburger Color\" name=\"hamburgerColor\" value=\"#ffffff\">\n        <input type=\"color\" title=\"Background Color\" name=\"menuBgColor\" value=\"#333333\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <nav class=\"navbar navbar-expand beta-menu navbar-dropdown align-items-center\" mbr-class=\"{'navbar-fixed-top': sticky,\n        'navbar-toggleable-sm': !collapsed,\n        'collapsed': collapsed,\n        'bg-color transparent': transparent}\">\n        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n            <div class=\"hamburger\">\n                <span></span>\n                <span></span>\n                <span></span>\n                <span></span>\n            </div>\n        </button>\n        <div class=\"menu-logo\">\n            <div class=\"navbar-brand\">\n                <span mbr-if=\"showLogo\" class=\"navbar-logo\">\n                    <a href=\"https://mobirise.com\">\n                         <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" mbr-style=\"{'height': logoSize + 'rem'}\" title>\n                    </a>\n                </span>\n                <span mbr-if=\"showBrand\" mbr-buttons mbr-theme-style=\"display-5\" class=\"navbar-caption-wrap\" data-toolbar=\"-mbrBtnMove,-mbrBtnAdd,-mbrBtnRemove\"><a class=\"navbar-caption text-white\" data-app-selector=\".navbar-caption\" href=\"index.html\"><br>Alisson Pelizaro</a></span>\n            </div>\n        </div>\n        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">\n            <ul mbr-if=\"showItems\" mbr-menu class=\"navbar-nav nav-dropdown\" mbr-theme-style=\"display-4\" mbr-class=\"{'nav-right': !showButtons,'navbar-nav-top-padding': isPublish && !showBrand && !showLogo}\"><li class=\"nav-item\">\n                    <a class=\"nav-link link text-white\" href=\"assets/files/CV%20-%20Alisson.pdf\" data-app-selector=\".nav-link,.dropdown-item\"><span class=\"mbri-download mbr-iconfont mbr-iconfont-btn\"></span>\n                        \n                        Currículo</a>\n                </li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"portfolio.html\" data-app-selector=\".nav-link,.dropdown-item\">Portfólio</a></li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"blog.html\" data-app-selector=\".nav-link,.dropdown-item\">\n                        \n                        Blog</a></li></ul>\n            <div mbr-if=\"showButtons\" mbr-buttons mbr-theme-style=\"display-4\" class=\"navbar-buttons mbr-section-btn\"><a class=\"btn btn-sm btn-primary\" href=\"contato.html\"><span class=\"mbri-paper-plane mbr-iconfont mbr-iconfont-btn\"></span>\n                    \n                    Contato</a></div>\n        </div>\n    </nav>\n</section>",
          "_styles": {
            ".navbar": {
              "padding": ".5rem 0",
              "background": "@menuBgColor",
              "transition": "none",
              "min-height": "77px"
            },
            ".navbar-dropdown.bg-color.transparent.opened": {
              "background": "@menuBgColor"
            },
            "a": {
              "font-style": "normal"
            },
            ".nav-item": {
              "& span": {
                "padding-right": "0.4em",
                "line-height": "0.5em",
                "vertical-align": "text-bottom",
                "position": "relative",
                "text-decoration": "none"
              },
              "& a": {
                "display": "flex",
                "align-items": "center",
                "justify-content": "center",
                "padding": "0.7rem 0 !important",
                "margin": "0rem .65rem !important"
              }
            },
            ".nav-item:focus, .nav-link:focus": {
              "outline": "none"
            },
            ".btn": {
              "padding": "0.4rem 1.5rem",
              ".mbr-iconfont": {
                "font-size": "1.6rem"
              },
              "display": "inline-flex",
              "align-items": "center"
            },
            ".menu-logo": {
              "margin-right": "auto",
              ".navbar-brand": {
                "display": "flex",
                "margin-left": "5rem",
                "padding": "0",
                "transition": "padding .2s",
                "min-height": "3.8rem",
                "align-items": "center",
                ".navbar-caption-wrap": {
                  "display": "-webkit-flex",
                  "-webkit-align-items": "center",
                  "align-items": "center",
                  "word-break": "break-word",
                  "min-width": "7rem",
                  "margin": ".3rem 0",
                  ".navbar-caption": {
                    "line-height": "1.2rem !important",
                    "padding-right": "2rem"
                  }
                },
                ".navbar-logo": {
                  "font-size": "4rem",
                  "transition": "font-size 0.25s",
                  "& img": {
                    "display": "flex"
                  },
                  ".mbr-iconfont": {
                    "transition": "font-size 0.25s"
                  }
                }
              }
            },
            ".navbar-toggleable-sm .navbar-collapse": {
              "justify-content": "flex-end",
              "-webkit-justify-content": "flex-end",
              "padding-right": "5rem",
              "width": "auto",
              ".navbar-nav": {
                "flex-wrap": "wrap",
                "-webkit-flex-wrap": "wrap",
                "padding-left": "0",
                ".nav-item": {
                  "-webkit-align-self": "center",
                  "align-self": "center"
                }
              },
              ".navbar-buttons": {
                "padding-left": "0",
                "padding-bottom": "0"
              }
            },
            ".dropdown": {
              ".dropdown-menu": {
                "background": "@menuBgColor",
                "display": "none",
                "position": "absolute",
                "min-width": "5rem",
                "padding-top": "1.4rem",
                "padding-bottom": "1.4rem",
                "text-align": "left",
                ".dropdown-item": {
                  "width": "auto",
                  "padding": "0.235em 1.5385em 0.235em 1.5385em !important",
                  "&::after": {
                    "right": "0.5rem"
                  }
                },
                ".dropdown-submenu": {
                  "margin": "0"
                }
              },
              "&.open > .dropdown-menu": {
                "display": "block"
              }
            },
            ".navbar-toggleable-sm": {
              "&.opened:after": {
                "position": "absolute",
                "width": "100vw",
                "height": "100vh",
                "content": "''",
                "background-color": "rgba(0, 0, 0, 0.1)",
                "left": "0",
                "bottom": "0",
                "transform": "translateY(100%)",
                "-webkit-transform": "translateY(100%)",
                "z-index": "1000"
              }
            },
            ".navbar.navbar-short": {
              "min-height": "60px",
              "transition": "all .2s",
              "& .navbar-toggler-right": {
                "top": "20px"
              },
              "& .navbar-logo a": {
                "font-size": "2.5rem !important",
                "line-height": "2.5rem",
                "transition": "font-size 0.25s",
                "& .mbr-iconfont": {
                  "font-size": "2.5rem !important"
                },
                "& img": {
                  "height": "3rem !important"
                }
              },
              "& .navbar-brand": {
                "min-height": "3rem"
              }
            },
            "button.navbar-toggler": {
              "width": "31px",
              "height": "18px",
              "cursor": "pointer",
              "transition": "all .2s",
              "top": "1.5rem",
              "right": "1rem",
              "&:focus": {
                "outline": "none"
              },
              ".hamburger span": {
                "position": "absolute",
                "right": "0",
                "width": "30px",
                "height": "2px",
                "border-right": "5px",
                "background-color": "@hamburgerColor",
                "&:nth-child(1)": {
                  "top": "0",
                  "transition": "all .2s"
                },
                "&:nth-child(2)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(3)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(4)": {
                  "top": "16px",
                  "transition": "all .2s"
                }
              }
            },
            "nav.opened .hamburger span": {
              "&:nth-child(1)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              },
              "&:nth-child(2)": {
                "-webkit-transform": "rotate(45deg)",
                "transform": "rotate(45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(3)": {
                "-webkit-transform": "rotate(-45deg)",
                "transform": "rotate(-45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(4)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              }
            },
            ".collapsed": {
              "&.navbar-expand": {
                "flex-direction": "column"
              },
              ".btn": {
                "display": "flex"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (max-width: 991px)": {
              ".navbar-expand": {
                "flex-direction": "column"
              },
              "img": {
                "height": "3.8rem !important"
              },
              ".btn": {
                "display": "flex"
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (min-width: 767px)": {
              ".menu-logo": {
                "flex-shrink": "0"
              }
            },
            ".navbar-collapse": {
              "flex-basis": "auto"
            },
            ".nav-link:hover, .dropdown-item:hover": {
              "color": "@itemsHoverColor !important"
            }
          },
          "_cid": "qKXgHenCD7",
          "_anchor": "menu1-14",
          "_protectedParams": [],
          "_global": true,
          "_once": "menu",
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "background-color": "@bgColor",
            ".mbr-section-subtitle": {
              "color": "#767676"
            },
            "H2": {
              "color": "#72abbe"
            }
          },
          "_name": "content4",
          "_customHTML": "<section class=\"mbr-section content4\" group=\"Article\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"8\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n\n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubtitle\" checked>\n        <input type=\"checkbox\" title=\"Show Buttons\" name=\"showButtons\">\n        <input type=\"color\" title=\"Background Color\" name=\"bgColor\" value=\"#ffffff\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"container\">\n        <div class=\"media-container-row\">\n            <div class=\"title col-12 col-md-8\">\n                <h2 mbr-if=\"showTitle\" class=\"align-center pb-3 mbr-fonts-style\" mbr-theme-style=\"display-2\">\n                    Bem-vindo ao meu blog</h2>\n                <h3 mbr-if=\"showSubtitle\" data-app-selector=\".mbr-section-subtitle\" class=\"mbr-section-subtitle align-center mbr-light mbr-fonts-style\" mbr-theme-style=\"display-5\">\n                    Aqui vou postar ocasionalmente artigos sobre tecnologia e tutoriais de difíceis estudos que eu considero úteis para alavancar a area de desenvovimento aqui em nosso país</h3>\n                <div class=\"mbr-section-btn align-center py-4\" mbr-if=\"showButtons\" mbr-buttons mbr-theme-style=\"display-4\" data-toolbar=\"-mbrLink,-mbrBtnAdd,-mbrBtnMove\">\n                    <a class=\"btn btn-primary\" href=\"https://mobirise.com\">LEARN MORE</a>\n                    <a class=\"btn btn-black-outline\" href=\"https://mobirise.com\">LIVE DEMO</a>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_cid": "qObxg5bOKx",
          "_anchor": "content4-17",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "p": {
              "color": "#767676"
            },
            ".mbr-section-subtitle": {
              "color": "#767676"
            },
            ".accordion-content": {
              "flex-basis": "100%",
              "-webkit-flex-basis": "100%"
            },
            ".panel-group": {
              "width": "100%"
            },
            ".card": {
              "border-radius": "0px",
              "margin-bottom": "-1px",
              ".card-header": {
                "border-radius": "0px",
                "border": "0px",
                "padding": "0",
                "a.panel-title": {
                  "margin-bottom": "0",
                  "font-style": "normal",
                  "font-weight": "500",
                  "display": "block",
                  "text-decoration": "none !important",
                  "margin-top": "-1px",
                  "line-height": "normal",
                  "&:focus": {
                    "text-decoration": "none !important"
                  },
                  "h4": {
                    "padding": "1.3rem 2rem",
                    "border": "1px solid #dfdfdf",
                    "margin-bottom": "0",
                    ".sign": {
                      "padding-right": "1rem"
                    }
                  }
                }
              }
            },
            ".mbr-figure": {
              "-webkit-align-self": "flex-start",
              "align-self": "flex-start",
              "padding-left": "4rem",
              "& when (@reverseContent)": {
                "padding-left": "0",
                "padding-right": "4rem"
              }
            },
            ".media-container-row": {
              "& when (@reverseContent)": {
                "-webkit-flex-direction": "row-reverse",
                "flex-direction": "row-reverse"
              }
            },
            "@media (max-width: 991px)": {
              ".media-container-row": {
                "& when (@reverseContent)": {
                  "-webkit-flex-direction": "column-reverse",
                  "flex-direction": "column-reverse"
                }
              },
              ".mbr-figure": {
                "padding-right": "0",
                "padding-left": "0",
                "padding-top": "2rem",
                "& when (@reverseContent)": {
                  "padding-top": "0",
                  "padding-bottom": "2rem"
                }
              }
            },
            "H2": {
              "color": "#72abbe"
            }
          },
          "_name": "accordion2",
          "_customHTML": "<section class=\"accordion2\" group=\"Accordion & Toggles & Tabs\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-parallax-background':bg.parallax}\" plugins=\"mbr-switch-arrow\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"9\" step=\"1\" value=\"4\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"9\" step=\"1\" value=\"4\">\n        \n        <input type=\"checkbox\" title=\"Media on Right/Left\" name=\"reverseContent\">\n        <input type=\"range\" inline title=\"Media Size\" name=\"mediaSize\" min=\"20\" max=\"200\" step=\"1\" value=\"43\">\n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\">\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubtitle\" checked>\n        <select title=\"Accordions Count\" name=\"bootstrapAccordion\">\n             <option value=\"1\">1</option>\n             <option value=\"2\">2</option>\n             <option value=\"3\" selected>3</option>\n             <option value=\"4\">4</option>\n             <option value=\"5\">5</option>\n             <option value=\"6\">6</option>\n        </select>\n\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/img/04.jpg\">\n            <input type=\"color\" title=\"Background Color\" value=\"#f9f9f9\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" checked condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#cbf4fa\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.6\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n    <div class=\"container\">\n        <div class=\"media-container-row pt-5\">\n            <div class=\"accordion-content\">\n                <h2 class=\"mbr-section-title align-center pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" mbr-if=\"showTitle\">\n                        Ultimos posts:</h2>\n                <h3 class=\"mbr-section-subtitle pt-2 align-center mbr-light mbr-fonts-style\" mbr-theme-style=\"display-5\" mbr-if=\"showSubtitle\" data-app-selector=\".mbr-section-subtitle\">\n                    Últimos posts:</h3>\n                <div id=\"bootstrap-accordion\" class=\"panel-group accordionStyles accordion pt-5 mt-3\" role=\"tablist\" aria-multiselectable=\"true\">\n                        <div class=\"card\">\n                            <div class=\"card-header\" role=\"tab\" id=\"headingOne\">\n                                <a role=\"button\" class=\"collapsed panel-title text-black\" data-toggle=\"collapse\" data-core href=\"#collapse1\" aria-expanded=\"false\" aria-controls=\"collapse1\">\n                                    <h4 class=\"mbr-fonts-style\" mbr-theme-style=\"display-5\">\n                                        <span class=\"sign mbr-iconfont mbri-arrow-down inactive\"></span>&nbsp;Nenhum post ainda</h4>\n                                </a>\n                            </div>\n                            <div id=\"collapse1\" class=\"panel-collapse noScroll collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">\n                                <div class=\"panel-body p-4\">\n                                    <p class=\"mbr-fonts-style panel-text\" mbr-theme-style=\"display-7\" data-app-selector=\".panel-text\">Nenum post aqui<br><a href=\"post-post.html\">Continuar lendo...</a></p>\n                                </div>\n                            </div>\n                        </div>\n                \n                        <div class=\"card\" mbr-if=\"bootstrapAccordion > 1\">\n                            <div class=\"card-header\" role=\"tab\" id=\"headingTwo\">\n                                <a role=\"button\" class=\"collapsed panel-title text-black\" data-toggle=\"collapse\" data-core href=\"#collapse2\" aria-expanded=\"false\" aria-controls=\"collapse2\">\n                                    <h4 class=\"mbr-fonts-style mbr-fonts-style\" mbr-theme-style=\"display-5\">\n                                        <span class=\"sign mbr-iconfont mbri-arrow-down inactive\"></span>&nbsp;Nenhum post ainda</h4>\n                                </a>\n                                \n                            </div>\n                            <div id=\"collapse2\" class=\"panel-collapse noScroll collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">\n                                <div class=\"panel-body p-4\">\n                                    <p class=\"mbr-fonts-style panel-text\" mbr-theme-style=\"display-7\" data-app-selector=\".panel-text\">Nenum post aqui\n<br><a href=\"post-post.html\">Continuar lendo...</a></p>\n                                </div>\n                            </div>\n                        </div>\n                \n                        <div class=\"card\" mbr-if=\"bootstrapAccordion > 2\">\n                            <div class=\"card-header\" role=\"tab\" id=\"headingThree\">\n                                <a role=\"button\" class=\"collapsed panel-title text-black\" data-toggle=\"collapse\" data-core href=\"#collapse3\" aria-expanded=\"false\" aria-controls=\"collapse3\">\n                                    <h4 class=\"mbr-fonts-style\" mbr-theme-style=\"display-5\">\n                                        <span class=\"sign mbr-iconfont mbri-arrow-down inactive\"></span>&nbsp;Nenhum post ainda</h4>\n                                </a>\n                            </div>\n                            <div id=\"collapse3\" class=\"panel-collapse noScroll collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\">\n                                <div class=\"panel-body p-4\">\n                                    <p class=\"mbr-fonts-style panel-text\" mbr-theme-style=\"display-7\" data-app-selector=\".panel-text\">Nenum post aqui \n<br><a href=\"post-post.html\">Continuar lendo...</a></p>\n                                </div>\n                            </div>\n                        </div>\n                \n                        <div class=\"card\" mbr-if=\"bootstrapAccordion > 3\">\n                            <div class=\"card-header\" role=\"tab\" id=\"headingFour\">\n                                <a role=\"button\" class=\"collapsed panel-title text-black\" data-toggle=\"collapse\" data-core href=\"#collapse4\" aria-expanded=\"false\" aria-controls=\"collapse4\">\n                                    <h4 class=\"mbr-fonts-style\" mbr-theme-style=\"display-5\">\n                                        <span class=\"sign mbr-iconfont mbri-arrow-down inactive\"></span> This is a accordion Title 4\n                                    </h4>\n                                </a>\n                            </div>\n                            <div id=\"collapse4\" class=\"panel-collapse noScroll collapse\" role=\"tabpanel\" aria-labelledby=\"headingFour\" data-parent=\"#accordion\">\n                                <div class=\"panel-body p-4\">\n                                    <p class=\"mbr-fonts-style panel-text\" mbr-theme-style=\"display-7\" data-app-selector=\".panel-text\">\n                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in nulla ut magna vehicula libero luctus in ipsum consequat faucibus. Ut porta nulla ac dapibus convallis. Curabitur sit amet massa quam. In ut ex auctor, porta neque quis, sagittis purus. Nunc auctor gravida magna, sed efficitur tortor tristique quis.</p>\n                                </div>\n                            </div>\n                        </div>\n                \n                        <div class=\"card\" mbr-if=\"bootstrapAccordion > 4\">\n                            <div class=\"card-header\" role=\"tab\" id=\"headingFive\">\n                                <a role=\"button\" class=\"collapsed panel-title text-black\" data-toggle=\"collapse\" data-core href=\"#collapse5\" aria-expanded=\"false\" aria-controls=\"collapse5\">\n                                    <h4 class=\"mbr-fonts-style\" mbr-theme-style=\"display-5\">\n                                        <span class=\"sign mbr-iconfont mbri-arrow-down inactive\"></span> This is a accordion Title 5\n                                    </h4>\n                                </a>\n                            </div>\n                            <div id=\"collapse5\" class=\"panel-collapse noScroll collapse\" role=\"tabpanel\" aria-labelledby=\"headingFive\" data-parent=\"#accordion\">\n                                <div class=\"panel-body p-4\">\n                                    <p class=\"mbr-fonts-style panel-text\" mbr-theme-style=\"display-7\" data-app-selector=\".panel-text\">\n                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in nulla ut magna vehicula libero luctus in ipsum consequat faucibus. Ut porta nulla ac dapibus convallis. Curabitur sit amet massa quam. In ut ex auctor, porta neque quis, sagittis purus. Nunc auctor gravida magna, sed efficitur tortor tristique quis.</p>\n                                </div>\n                            </div>\n                        </div>\n                \n                        <div class=\"card\" mbr-if=\"bootstrapAccordion > 5\">\n                            <div class=\"card-header\" role=\"tab\" id=\"headingSix\">\n                                <a role=\"button\" class=\"collapsed panel-title text-black\" data-toggle=\"collapse\" data-core href=\"#collapse6\" aria-expanded=\"false\" aria-controls=\"collapse6\">\n                                    <h4 class=\"mbr-fonts-style\" mbr-theme-style=\"display-5\">\n                                        <span class=\"sign mbr-iconfont mbri-arrow-down inactive\"></span> This is a accordion Title 6\n                                    </h4>\n                                </a>\n                            </div>\n                            <div id=\"collapse6\" class=\"panel-collapse noScroll collapse\" role=\"tabpanel\" aria-labelledby=\"headingSix\" data-parent=\"#accordion\">\n                                <div class=\"panel-body p-4\">\n                                    <p class=\"mbr-fonts-style panel-text\" mbr-theme-style=\"display-7\" data-app-selector=\".panel-text\">\n                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in nulla ut magna vehicula libero luctus in ipsum consequat faucibus. Ut porta nulla ac dapibus convallis. Curabitur sit amet massa quam. In ut ex auctor, porta neque quis, sagittis purus. Nunc auctor gravida magna, sed efficitur tortor tristique quis.</p>\n                                </div>\n                            </div>\n                        </div>\n                </div>\n            </div>\n            <div class=\"mbr-figure\" mbr-style=\"{'width': mediaSize + '%'}\">\n                    <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" title>\n            </div>\n        </div>\n    </div>\n</section>",
          "_cid": "qObyfP2uGC",
          "_anchor": "accordion2-19",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            ".content": {
              "@media (max-width: 767px)": {
                "text-align": "center",
                "> div:not(:last-child)": {
                  "margin-bottom": "2rem"
                }
              }
            },
            ".media-wrap": {
              "@media (max-width: 767px)": {
                "margin-bottom": "1rem"
              },
              ".mbr-iconfont-logo": {
                "font-size": "7.5rem",
                "color": "#f36"
              },
              "img": {
                "height": "6rem"
              }
            },
            ".footer-lower": {
              ".copyright": {
                "@media (max-width: 767px)": {
                  "margin-bottom": "1rem",
                  "text-align": "center"
                }
              },
              "hr": {
                "margin": "1rem 0",
                "border-color": "#fff",
                "opacity": ".05"
              },
              ".social-list": {
                "padding-left": "0",
                "margin-bottom": "0",
                "list-style": "none",
                "display": "flex",
                "flex-wrap": "wrap",
                "justify-content": "flex-end",
                "-webkit-justify-content": "flex-end",
                ".mbr-iconfont-social": {
                  "font-size": "1.3rem",
                  "color": "#fff"
                },
                ".soc-item": {
                  "margin": "0 .5rem"
                },
                "a": {
                  "margin": "0",
                  "opacity": ".5",
                  "-webkit-transition": ".2s linear",
                  "transition": ".2s linear",
                  "&:hover": {
                    "opacity": "1"
                  }
                },
                "@media (max-width: 767px)": {
                  "justify-content": "center",
                  "-webkit-justify-content": "center"
                }
              }
            },
            "I": {
              "color": "#cccccc"
            }
          },
          "_name": "footer1",
          "_customHTML": "<section group=\"Footers\" mbr-class=\"{'mbr-reveal': reveal, 'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->  \n        <input type=\"range\" inline=\"\" title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"range\" inline=\"\" title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"checkbox\" title=\"Show Copyright\" name=\"showCopyright\" checked=\"\">\n        <select title=\"Icons\" name=\"iconsCount\">\n            <option value=\"0\">0</option>\n            <option value=\"1\">1</option>\n            <option value=\"2\">2</option>\n            <option value=\"3\">3</option>\n            <option value=\"4\">4</option>\n            <option value=\"5\">5</option>\n            <option value=\"6\" selected=\"\">6</option>\n        </select>\n        <input type=\"checkbox\" title=\"Reveal effect\" name=\"reveal\" checked=\"\">\n        <fieldset type=\"background\" name=\"bg\" parallax=\"\">\n            <input type=\"image\" title=\"Background Image\" value=\"@PROJECT_PATH@/assets/images/jumbotron.jpg\">\n            <input type=\"color\" title=\"Background Color\" value=\"#2e2e2e\" selected=\"\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\" checked=\"\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#3C3C3C\" condition=\"overlay &amp;&amp; bg.type !== 'color'\">\n        <input type=\"range\" inline=\"\" title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.5\" condition=\"overlay &amp;&amp; bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay &amp;&amp; bg.type !== 'color'\" opacity=\"{{overlayOpacity}}\" bg-color=\"{{overlayColor}}\"></div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row content text-white\">\n            <div class=\"col-12 col-md-3\">\n                <div class=\"media-wrap\">\n                    <a href=\"https://mobirise.com/\">\n                        <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" title=\"\">\n                    </a>\n                </div>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\"></h5>\n                <p class=\"mbr-text\"></p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Contato</h5>\n                <p class=\"mbr-text\"><i>\n                    Email</i>: alissonpelizaro@hotmail.com\n<br><i>Celular:<br></i>+55 (41) 9 9147-0618</p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Mapa do site</h5>\n                <p class=\"mbr-text\">\n                    <a class=\"text-primary\" href=\"index.html\">Bem-vindo\n</a><br><a href=\"blog.html\">Blog</a><br><a href=\"portfolio.html\">Portfólio</a><br><a href=\"trajeto.html\">Meu trajeto</a><br><a href=\"contato.html\">Contato</a><br></p>\n            </div>\n        </div>\n        <div class=\"footer-lower\" mbr-if=\"showCopyright\">\n            <div class=\"media-container-row\">\n                <div class=\"col-sm-12\">\n                    <hr>\n                </div>\n            </div>\n            <div class=\"media-container-row mbr-white\">\n                <div class=\"col-sm-6 copyright\">\n                    <p class=\"mbr-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".copyright > p\">\n                        © Copyright 2018 - Todos os direitos reservados</p>\n                </div>\n                <div class=\"col-md-6\">\n                    <div class=\"social-list align-right\" mbr-if=\"iconsCount > 0\">\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>0\">\n                            <a href=\"https://twitter.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-twitter socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>1\">\n                            <a href=\"https://www.facebook.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-facebook socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>2\">\n                            <a href=\"https://github.com/alissonpelizaro\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-github socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>3\">\n                            <a href=\"https://instagram.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-instagram socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>4\">\n                            <a href=\"https://www.linkedin.com/in/alisson-pelizaro/\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-linkedin socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>5\">\n                            <a href=\"https://pt.stackoverflow.com/users/99799/alisson-pelizaro\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-stackoverflow socicon\"></span>\n                            </a>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_anchor": "footer1-1u",
          "_isUserblock": true,
          "_cid": "qObHPn7Tcw",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        }
      ]
    },
    "contato.html": {
      "settings": {
        "meta_descr": "Entre em contato comigo através dessa página!",
        "title": "Contato | Alisson Pelizaro",
        "order": 4
      },
      "components": [
        {
          "_name": "menu1",
          "_customHTML": "<section class=\"menu\" group=\"Menu\" plugins=\"DropDown, TouchSwipe\" always-top global once=\"menu\" not-draggable position-absolute>\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"checkbox\" title=\"Show Logo\" name=\"showLogo\" checked>\n        <input type=\"range\" title=\"Logo Size\" inline name=\"logoSize\" min=\"3.8\" max=\"8\" step=\"0.1\" value=\"3.8\" condition=\"showLogo\">\n        <input type=\"checkbox\" title=\"Show Brand Name\" name=\"showBrand\" checked>\n        <input type=\"checkbox\" title=\"Show Menu Items\" name=\"showItems\" checked>\n        <input type=\"color\" title=\"Items Hover Color\" name=\"itemsHoverColor\" value=\"#c1c1c1\" condition=\"showItems\">\n        <input type=\"checkbox\" title=\"Show Button(s)\" name=\"showButtons\" checked>\n        <input type=\"checkbox\" title=\"Sticky\" name=\"sticky\" checked>\n        <input type=\"checkbox\" title=\"Collapsed\" name=\"collapsed\">\n        <input type=\"checkbox\" title=\"Transparent\" name=\"transparent\">\n        <input type=\"color\" title=\"Hamburger Color\" name=\"hamburgerColor\" value=\"#ffffff\">\n        <input type=\"color\" title=\"Background Color\" name=\"menuBgColor\" value=\"#333333\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <nav class=\"navbar navbar-expand beta-menu navbar-dropdown align-items-center\" mbr-class=\"{'navbar-fixed-top': sticky,\n        'navbar-toggleable-sm': !collapsed,\n        'collapsed': collapsed,\n        'bg-color transparent': transparent}\">\n        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n            <div class=\"hamburger\">\n                <span></span>\n                <span></span>\n                <span></span>\n                <span></span>\n            </div>\n        </button>\n        <div class=\"menu-logo\">\n            <div class=\"navbar-brand\">\n                <span mbr-if=\"showLogo\" class=\"navbar-logo\">\n                    <a href=\"https://mobirise.com\">\n                         <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" mbr-style=\"{'height': logoSize + 'rem'}\" title>\n                    </a>\n                </span>\n                <span mbr-if=\"showBrand\" mbr-buttons mbr-theme-style=\"display-5\" class=\"navbar-caption-wrap\" data-toolbar=\"-mbrBtnMove,-mbrBtnAdd,-mbrBtnRemove\"><a class=\"navbar-caption text-white\" data-app-selector=\".navbar-caption\" href=\"index.html\"><br>Alisson Pelizaro</a></span>\n            </div>\n        </div>\n        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">\n            <ul mbr-if=\"showItems\" mbr-menu class=\"navbar-nav nav-dropdown\" mbr-theme-style=\"display-4\" mbr-class=\"{'nav-right': !showButtons,'navbar-nav-top-padding': isPublish && !showBrand && !showLogo}\"><li class=\"nav-item\">\n                    <a class=\"nav-link link text-white\" href=\"assets/files/CV%20-%20Alisson.pdf\" data-app-selector=\".nav-link,.dropdown-item\"><span class=\"mbri-download mbr-iconfont mbr-iconfont-btn\"></span>\n                        \n                        Currículo</a>\n                </li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"portfolio.html\" data-app-selector=\".nav-link,.dropdown-item\">Portfólio</a></li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"blog.html\" data-app-selector=\".nav-link,.dropdown-item\">\n                        \n                        Blog</a></li></ul>\n            <div mbr-if=\"showButtons\" mbr-buttons mbr-theme-style=\"display-4\" class=\"navbar-buttons mbr-section-btn\"><a class=\"btn btn-sm btn-primary\" href=\"contato.html\"><span class=\"mbri-paper-plane mbr-iconfont mbr-iconfont-btn\"></span>\n                    \n                    Contato</a></div>\n        </div>\n    </nav>\n</section>",
          "_styles": {
            ".navbar": {
              "padding": ".5rem 0",
              "background": "@menuBgColor",
              "transition": "none",
              "min-height": "77px"
            },
            ".navbar-dropdown.bg-color.transparent.opened": {
              "background": "@menuBgColor"
            },
            "a": {
              "font-style": "normal"
            },
            ".nav-item": {
              "& span": {
                "padding-right": "0.4em",
                "line-height": "0.5em",
                "vertical-align": "text-bottom",
                "position": "relative",
                "text-decoration": "none"
              },
              "& a": {
                "display": "flex",
                "align-items": "center",
                "justify-content": "center",
                "padding": "0.7rem 0 !important",
                "margin": "0rem .65rem !important"
              }
            },
            ".nav-item:focus, .nav-link:focus": {
              "outline": "none"
            },
            ".btn": {
              "padding": "0.4rem 1.5rem",
              ".mbr-iconfont": {
                "font-size": "1.6rem"
              },
              "display": "inline-flex",
              "align-items": "center"
            },
            ".menu-logo": {
              "margin-right": "auto",
              ".navbar-brand": {
                "display": "flex",
                "margin-left": "5rem",
                "padding": "0",
                "transition": "padding .2s",
                "min-height": "3.8rem",
                "align-items": "center",
                ".navbar-caption-wrap": {
                  "display": "-webkit-flex",
                  "-webkit-align-items": "center",
                  "align-items": "center",
                  "word-break": "break-word",
                  "min-width": "7rem",
                  "margin": ".3rem 0",
                  ".navbar-caption": {
                    "line-height": "1.2rem !important",
                    "padding-right": "2rem"
                  }
                },
                ".navbar-logo": {
                  "font-size": "4rem",
                  "transition": "font-size 0.25s",
                  "& img": {
                    "display": "flex"
                  },
                  ".mbr-iconfont": {
                    "transition": "font-size 0.25s"
                  }
                }
              }
            },
            ".navbar-toggleable-sm .navbar-collapse": {
              "justify-content": "flex-end",
              "-webkit-justify-content": "flex-end",
              "padding-right": "5rem",
              "width": "auto",
              ".navbar-nav": {
                "flex-wrap": "wrap",
                "-webkit-flex-wrap": "wrap",
                "padding-left": "0",
                ".nav-item": {
                  "-webkit-align-self": "center",
                  "align-self": "center"
                }
              },
              ".navbar-buttons": {
                "padding-left": "0",
                "padding-bottom": "0"
              }
            },
            ".dropdown": {
              ".dropdown-menu": {
                "background": "@menuBgColor",
                "display": "none",
                "position": "absolute",
                "min-width": "5rem",
                "padding-top": "1.4rem",
                "padding-bottom": "1.4rem",
                "text-align": "left",
                ".dropdown-item": {
                  "width": "auto",
                  "padding": "0.235em 1.5385em 0.235em 1.5385em !important",
                  "&::after": {
                    "right": "0.5rem"
                  }
                },
                ".dropdown-submenu": {
                  "margin": "0"
                }
              },
              "&.open > .dropdown-menu": {
                "display": "block"
              }
            },
            ".navbar-toggleable-sm": {
              "&.opened:after": {
                "position": "absolute",
                "width": "100vw",
                "height": "100vh",
                "content": "''",
                "background-color": "rgba(0, 0, 0, 0.1)",
                "left": "0",
                "bottom": "0",
                "transform": "translateY(100%)",
                "-webkit-transform": "translateY(100%)",
                "z-index": "1000"
              }
            },
            ".navbar.navbar-short": {
              "min-height": "60px",
              "transition": "all .2s",
              "& .navbar-toggler-right": {
                "top": "20px"
              },
              "& .navbar-logo a": {
                "font-size": "2.5rem !important",
                "line-height": "2.5rem",
                "transition": "font-size 0.25s",
                "& .mbr-iconfont": {
                  "font-size": "2.5rem !important"
                },
                "& img": {
                  "height": "3rem !important"
                }
              },
              "& .navbar-brand": {
                "min-height": "3rem"
              }
            },
            "button.navbar-toggler": {
              "width": "31px",
              "height": "18px",
              "cursor": "pointer",
              "transition": "all .2s",
              "top": "1.5rem",
              "right": "1rem",
              "&:focus": {
                "outline": "none"
              },
              ".hamburger span": {
                "position": "absolute",
                "right": "0",
                "width": "30px",
                "height": "2px",
                "border-right": "5px",
                "background-color": "@hamburgerColor",
                "&:nth-child(1)": {
                  "top": "0",
                  "transition": "all .2s"
                },
                "&:nth-child(2)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(3)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(4)": {
                  "top": "16px",
                  "transition": "all .2s"
                }
              }
            },
            "nav.opened .hamburger span": {
              "&:nth-child(1)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              },
              "&:nth-child(2)": {
                "-webkit-transform": "rotate(45deg)",
                "transform": "rotate(45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(3)": {
                "-webkit-transform": "rotate(-45deg)",
                "transform": "rotate(-45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(4)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              }
            },
            ".collapsed": {
              "&.navbar-expand": {
                "flex-direction": "column"
              },
              ".btn": {
                "display": "flex"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (max-width: 991px)": {
              ".navbar-expand": {
                "flex-direction": "column"
              },
              "img": {
                "height": "3.8rem !important"
              },
              ".btn": {
                "display": "flex"
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (min-width: 767px)": {
              ".menu-logo": {
                "flex-shrink": "0"
              }
            },
            ".navbar-collapse": {
              "flex-basis": "auto"
            },
            ".nav-link:hover, .dropdown-item:hover": {
              "color": "@itemsHoverColor !important"
            }
          },
          "_cid": "qKXgHenCD7",
          "_anchor": "menu1-11",
          "_protectedParams": [],
          "_global": true,
          "_once": "menu",
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            ".title": {
              "margin-bottom": "2rem"
            },
            ".mbr-section-subtitle": {
              "color": "#767676"
            },
            "a:not([href]):not([tabindex])": {
              "color": "#fff",
              "border-radius": "3px"
            },
            "a.btn-white:not([href]):not([tabindex])": {
              "color": "#333"
            },
            ".multi-horizontal": {
              "flex-grow": "1",
              "-webkit-flex-grow": "1",
              "max-width": "100%"
            },
            ".input-group-btn": {
              "display": "block",
              "text-align": "center"
            },
            "LABEL": {
              "color": "#72abbe"
            },
            "H2": {
              "color": "#72abbe"
            }
          },
          "_name": "form1",
          "_customHTML": "<section class=\"mbr-section form1\" group=\"Forms\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" value=\"8\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" value=\"6\">\n\n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubtitle\" checked>\n\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/background2.jpg\" parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#ffffff\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#000000\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.2\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n    <div class=\"container\">\n        <div class=\"row justify-content-center\">\n            <div class=\"title col-12 col-lg-8\">\n                <h2 mbr-if=\"showTitle\" class=\"mbr-section-title align-center pb-3 mbr-fonts-style\" mbr-theme-style=\"display-2\">ENVIE-ME UMA MENSAGEM</h2>\n                <h3 mbr-if=\"showSubtitle\" class=\"mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-section-subtitle\">\n                    Lerei e reponderei em breve, prometo!</h3>\n            </div>\n        </div>\n    </div>\n    <div class=\"container\">\n        <div class=\"row justify-content-center\">\n            <div mbr-form class=\"media-container-column col-lg-8\">\n                    <div data-form-alert hidden>Perfeito! Já recebi sua mensagem.</div>\n            \n                    <form class=\"mbr-form\" action=\"alissonpelizaro@hotmail.com\" method=\"post\" name=\"Mobirise Form\">\n                        <div class=\"row row-sm-offset\">\n                            <div class=\"col-md-4 multi-horizontal\" data-for=\"name\">\n                                <div class=\"form-group\">\n                                    <label mbr-text class=\"form-control-label mbr-fonts-style\" mbr-theme-style=\"display-7\" for=\"name\">Name</label>\n                                    <input type=\"text\" class=\"form-control\" name=\"name\" data-form-field=\"Name\" required>\n                                </div>\n                            </div>\n                            <div class=\"col-md-4 multi-horizontal\" data-for=\"email\">\n                                <div class=\"form-group\">\n                                    <label mbr-text class=\"form-control-label mbr-fonts-style\" mbr-theme-style=\"display-7\" for=\"email\">Email</label>\n                                    <input type=\"email\" class=\"form-control\" name=\"email\" data-form-field=\"Email\" required>\n                                </div>\n                            </div>\n                            <div class=\"col-md-4 multi-horizontal\" data-for=\"phone\" hidden=\"hidden\">\n                                <div class=\"form-group\">\n                                    <label mbr-text class=\"form-control-label mbr-fonts-style\" mbr-theme-style=\"display-7\" for=\"phone\" hidden=\"hidden\">Phone</label>\n                                    <input type=\"tel\" class=\"form-control\" name=\"phone\" data-form-field=\"Phone\" hidden=\"hidden\">\n                                </div>\n                            </div>\n                        </div>\n                        <div class=\"form-group\" data-for=\"message\">\n                            <label mbr-text class=\"form-control-label mbr-fonts-style\" mbr-theme-style=\"display-7\" for=\"message\">Message</label>\n                            <textarea type=\"text\" class=\"form-control\" name=\"message\" rows=\"7\" data-form-field=\"Message\"></textarea>\n                        </div>\n            \n                        <span mbr-buttons mbr-theme-style=\"display-4\" data-toolbar=\"-mbrLink,-mbrBtnAdd,-mbrBtnMove\" class=\"input-group-btn\"><a href type=\"submit\" class=\"btn btn-primary btn-form\">ENVIAR</a></span>\n                    </form>\n            </div>\n        </div>\n    </div>\n</section>",
          "_cid": "qObfPNdNdk",
          "_anchor": "form1-12",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'color')": {
              "background": "linear-gradient(0deg, @color2, @bg-value)"
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            ".mbr-iconfont-social": {
              "font-size": "32px",
              "color": "@iconsColor"
            },
            ".social-list": {
              "a:focus": {
                "text-decoration": "none"
              }
            },
            "H2": {
              "color": "#ffffff"
            }
          },
          "_name": "social-buttons2",
          "_customHTML": "<section group=\"Social\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" plugins=\"SocialLikes\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input inline type=\"range\" title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"6\">\n        <input inline type=\"range\" title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"6\">\n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        \n        <input type=\"color\" title=\"Icons Color\" name=\"iconsColor\" value=\"#e7e7e7\"> \n        <select title=\"Icons\" name=\"iconsCount\">\n            <option value=\"1\">1</option>\n            <option value=\"2\">2</option>\n            <option value=\"3\">3</option>\n            <option value=\"4\">4</option>\n            <option value=\"5\">5</option>\n            <option value=\"6\" selected>6</option>\n        </select>\n\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/background1.jpg\" parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#72abbe\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n        <input type=\"color\" title=\"color2\" name=\"color2\" condition=\"bg.type=='color'\" value=\"#ffffff\">\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" checked condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#7cd1f6\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.5\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row\">\n            <div class=\"col-md-8 align-center\">\n                <h2 class=\"pb-3 mbr-fonts-style\" mbr-theme-style=\"display-2\" mbr-if=\"showTitle\">SIGA-ME</h2>\n                <div class=\"social-list pl-0 mb-0\">\n                    <a href=\"https://twitter.com/alhooroots\" target=\"_blank\">\n                        <span mbr-icon class=\"px-2 mbr-iconfont mbr-iconfont-social socicon-twitter socicon\" style=\"color: rgb(114, 171, 190);\"></span>\n                    </a>\n                    <a href=\"https://www.facebook.com/alhooroots\" target=\"_blank\">\n                        <span mbr-icon class=\"px-2 mbr-iconfont mbr-iconfont-social socicon-facebook socicon\" mbr-if=\"iconsCount > 1\" style=\"color: rgb(114, 171, 190);\"></span>\n                    </a>\n                    <a href=\"https://instagram.com/alhooroots\" target=\"_blank\">\n                        <span mbr-icon class=\"px-2 mbr-iconfont mbr-iconfont-social socicon-instagram socicon\" mbr-if=\"iconsCount > 2\" style=\"color: rgb(114, 171, 190);\"></span>\n                    </a>\n                    <a href=\"https://www.linkedin.com/in/alisson-pelizaro/\" target=\"_blank\">\n                        <span mbr-icon class=\"px-2 mbr-iconfont mbr-iconfont-social socicon-linkedin socicon\" mbr-if=\"iconsCount > 3\" style=\"color: rgb(114, 171, 190);\"></span>\n                    </a>\n                    <a href=\"https://github.com/alissonpelizaro\" target=\"_blank\">\n                        <span mbr-icon class=\"px-2 mbr-iconfont mbr-iconfont-social socicon-github socicon\" mbr-if=\"iconsCount > 4\" style=\"color: rgb(114, 171, 190);\"></span>\n                    </a>\n                    <a href=\"https://pt.stackoverflow.com/users/99799/alisson-pelizaro\" target=\"_blank\">\n                        <span mbr-icon class=\"px-2 mbr-iconfont mbr-iconfont-social socicon-stackoverflow socicon\" mbr-if=\"iconsCount > 5\" style=\"color: rgb(114, 171, 190);\"></span>\n                    </a>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_cid": "qObgeDYS9i",
          "_anchor": "social-buttons2-13",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            ".content": {
              "@media (max-width: 767px)": {
                "text-align": "center",
                "> div:not(:last-child)": {
                  "margin-bottom": "2rem"
                }
              }
            },
            ".media-wrap": {
              "@media (max-width: 767px)": {
                "margin-bottom": "1rem"
              },
              ".mbr-iconfont-logo": {
                "font-size": "7.5rem",
                "color": "#f36"
              },
              "img": {
                "height": "6rem"
              }
            },
            ".footer-lower": {
              ".copyright": {
                "@media (max-width: 767px)": {
                  "margin-bottom": "1rem",
                  "text-align": "center"
                }
              },
              "hr": {
                "margin": "1rem 0",
                "border-color": "#fff",
                "opacity": ".05"
              },
              ".social-list": {
                "padding-left": "0",
                "margin-bottom": "0",
                "list-style": "none",
                "display": "flex",
                "flex-wrap": "wrap",
                "justify-content": "flex-end",
                "-webkit-justify-content": "flex-end",
                ".mbr-iconfont-social": {
                  "font-size": "1.3rem",
                  "color": "#fff"
                },
                ".soc-item": {
                  "margin": "0 .5rem"
                },
                "a": {
                  "margin": "0",
                  "opacity": ".5",
                  "-webkit-transition": ".2s linear",
                  "transition": ".2s linear",
                  "&:hover": {
                    "opacity": "1"
                  }
                },
                "@media (max-width: 767px)": {
                  "justify-content": "center",
                  "-webkit-justify-content": "center"
                }
              }
            },
            "I": {
              "color": "#cccccc"
            }
          },
          "_name": "footer1",
          "_customHTML": "<section group=\"Footers\" mbr-class=\"{'mbr-reveal': reveal, 'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->  \n        <input type=\"range\" inline=\"\" title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"range\" inline=\"\" title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"checkbox\" title=\"Show Copyright\" name=\"showCopyright\" checked=\"\">\n        <select title=\"Icons\" name=\"iconsCount\">\n            <option value=\"0\">0</option>\n            <option value=\"1\">1</option>\n            <option value=\"2\">2</option>\n            <option value=\"3\">3</option>\n            <option value=\"4\">4</option>\n            <option value=\"5\">5</option>\n            <option value=\"6\" selected=\"\">6</option>\n        </select>\n        <input type=\"checkbox\" title=\"Reveal effect\" name=\"reveal\" checked=\"\">\n        <fieldset type=\"background\" name=\"bg\" parallax=\"\">\n            <input type=\"image\" title=\"Background Image\" value=\"@PROJECT_PATH@/assets/images/jumbotron.jpg\">\n            <input type=\"color\" title=\"Background Color\" value=\"#2e2e2e\" selected=\"\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\" checked=\"\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#3C3C3C\" condition=\"overlay &amp;&amp; bg.type !== 'color'\">\n        <input type=\"range\" inline=\"\" title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.5\" condition=\"overlay &amp;&amp; bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay &amp;&amp; bg.type !== 'color'\" opacity=\"{{overlayOpacity}}\" bg-color=\"{{overlayColor}}\"></div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row content text-white\">\n            <div class=\"col-12 col-md-3\">\n                <div class=\"media-wrap\">\n                    <a href=\"https://mobirise.com/\">\n                        <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" title=\"\">\n                    </a>\n                </div>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\"></h5>\n                <p class=\"mbr-text\"></p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Contato</h5>\n                <p class=\"mbr-text\"><i>\n                    Email</i>: alissonpelizaro@hotmail.com\n<br><i>Celular:<br></i>+55 (41) 9 9147-0618</p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Mapa do site</h5>\n                <p class=\"mbr-text\">\n                    <a class=\"text-primary\" href=\"index.html\">Bem-vindo\n</a><br><a href=\"blog.html\">Blog</a><br><a href=\"portfolio.html\">Portfólio</a><br><a href=\"trajeto.html\">Meu trajeto</a><br><a href=\"contato.html\">Contato</a><br></p>\n            </div>\n        </div>\n        <div class=\"footer-lower\" mbr-if=\"showCopyright\">\n            <div class=\"media-container-row\">\n                <div class=\"col-sm-12\">\n                    <hr>\n                </div>\n            </div>\n            <div class=\"media-container-row mbr-white\">\n                <div class=\"col-sm-6 copyright\">\n                    <p class=\"mbr-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".copyright > p\">\n                        © Copyright 2018 - Todos os direitos reservados</p>\n                </div>\n                <div class=\"col-md-6\">\n                    <div class=\"social-list align-right\" mbr-if=\"iconsCount > 0\">\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>0\">\n                            <a href=\"https://twitter.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-twitter socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>1\">\n                            <a href=\"https://www.facebook.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-facebook socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>2\">\n                            <a href=\"https://github.com/alissonpelizaro\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-github socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>3\">\n                            <a href=\"https://instagram.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-instagram socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>4\">\n                            <a href=\"https://www.linkedin.com/in/alisson-pelizaro/\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-linkedin socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>5\">\n                            <a href=\"https://pt.stackoverflow.com/users/99799/alisson-pelizaro\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-stackoverflow socicon\"></span>\n                            </a>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_anchor": "footer1-1v",
          "_isUserblock": true,
          "_cid": "qObHREuU5g",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        }
      ]
    },
    "portfolio.html": {
      "settings": {
        "meta_descr": "Portfólio de Alisson. Alguns de seus projetos e trabalhos voluntários.",
        "title": "Portfólio | Alisson Pelizaro",
        "order": 5
      },
      "components": [
        {
          "_name": "menu1",
          "_customHTML": "<section class=\"menu\" group=\"Menu\" plugins=\"DropDown, TouchSwipe\" always-top global once=\"menu\" not-draggable position-absolute>\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"checkbox\" title=\"Show Logo\" name=\"showLogo\" checked>\n        <input type=\"range\" title=\"Logo Size\" inline name=\"logoSize\" min=\"3.8\" max=\"8\" step=\"0.1\" value=\"3.8\" condition=\"showLogo\">\n        <input type=\"checkbox\" title=\"Show Brand Name\" name=\"showBrand\" checked>\n        <input type=\"checkbox\" title=\"Show Menu Items\" name=\"showItems\" checked>\n        <input type=\"color\" title=\"Items Hover Color\" name=\"itemsHoverColor\" value=\"#c1c1c1\" condition=\"showItems\">\n        <input type=\"checkbox\" title=\"Show Button(s)\" name=\"showButtons\" checked>\n        <input type=\"checkbox\" title=\"Sticky\" name=\"sticky\" checked>\n        <input type=\"checkbox\" title=\"Collapsed\" name=\"collapsed\">\n        <input type=\"checkbox\" title=\"Transparent\" name=\"transparent\">\n        <input type=\"color\" title=\"Hamburger Color\" name=\"hamburgerColor\" value=\"#ffffff\">\n        <input type=\"color\" title=\"Background Color\" name=\"menuBgColor\" value=\"#333333\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <nav class=\"navbar navbar-expand beta-menu navbar-dropdown align-items-center\" mbr-class=\"{'navbar-fixed-top': sticky,\n        'navbar-toggleable-sm': !collapsed,\n        'collapsed': collapsed,\n        'bg-color transparent': transparent}\">\n        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n            <div class=\"hamburger\">\n                <span></span>\n                <span></span>\n                <span></span>\n                <span></span>\n            </div>\n        </button>\n        <div class=\"menu-logo\">\n            <div class=\"navbar-brand\">\n                <span mbr-if=\"showLogo\" class=\"navbar-logo\">\n                    <a href=\"https://mobirise.com\">\n                         <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" mbr-style=\"{'height': logoSize + 'rem'}\" title>\n                    </a>\n                </span>\n                <span mbr-if=\"showBrand\" mbr-buttons mbr-theme-style=\"display-5\" class=\"navbar-caption-wrap\" data-toolbar=\"-mbrBtnMove,-mbrBtnAdd,-mbrBtnRemove\"><a class=\"navbar-caption text-white\" data-app-selector=\".navbar-caption\" href=\"index.html\"><br>Alisson Pelizaro</a></span>\n            </div>\n        </div>\n        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">\n            <ul mbr-if=\"showItems\" mbr-menu class=\"navbar-nav nav-dropdown\" mbr-theme-style=\"display-4\" mbr-class=\"{'nav-right': !showButtons,'navbar-nav-top-padding': isPublish && !showBrand && !showLogo}\"><li class=\"nav-item\">\n                    <a class=\"nav-link link text-white\" href=\"assets/files/CV%20-%20Alisson.pdf\" data-app-selector=\".nav-link,.dropdown-item\"><span class=\"mbri-download mbr-iconfont mbr-iconfont-btn\"></span>\n                        \n                        Currículo</a>\n                </li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"portfolio.html\" data-app-selector=\".nav-link,.dropdown-item\">Portfólio</a></li><li class=\"nav-item\"><a class=\"nav-link link text-white\" href=\"blog.html\" data-app-selector=\".nav-link,.dropdown-item\">\n                        \n                        Blog</a></li></ul>\n            <div mbr-if=\"showButtons\" mbr-buttons mbr-theme-style=\"display-4\" class=\"navbar-buttons mbr-section-btn\"><a class=\"btn btn-sm btn-primary\" href=\"contato.html\"><span class=\"mbri-paper-plane mbr-iconfont mbr-iconfont-btn\"></span>\n                    \n                    Contato</a></div>\n        </div>\n    </nav>\n</section>",
          "_styles": {
            ".navbar": {
              "padding": ".5rem 0",
              "background": "@menuBgColor",
              "transition": "none",
              "min-height": "77px"
            },
            ".navbar-dropdown.bg-color.transparent.opened": {
              "background": "@menuBgColor"
            },
            "a": {
              "font-style": "normal"
            },
            ".nav-item": {
              "& span": {
                "padding-right": "0.4em",
                "line-height": "0.5em",
                "vertical-align": "text-bottom",
                "position": "relative",
                "text-decoration": "none"
              },
              "& a": {
                "display": "flex",
                "align-items": "center",
                "justify-content": "center",
                "padding": "0.7rem 0 !important",
                "margin": "0rem .65rem !important"
              }
            },
            ".nav-item:focus, .nav-link:focus": {
              "outline": "none"
            },
            ".btn": {
              "padding": "0.4rem 1.5rem",
              ".mbr-iconfont": {
                "font-size": "1.6rem"
              },
              "display": "inline-flex",
              "align-items": "center"
            },
            ".menu-logo": {
              "margin-right": "auto",
              ".navbar-brand": {
                "display": "flex",
                "margin-left": "5rem",
                "padding": "0",
                "transition": "padding .2s",
                "min-height": "3.8rem",
                "align-items": "center",
                ".navbar-caption-wrap": {
                  "display": "-webkit-flex",
                  "-webkit-align-items": "center",
                  "align-items": "center",
                  "word-break": "break-word",
                  "min-width": "7rem",
                  "margin": ".3rem 0",
                  ".navbar-caption": {
                    "line-height": "1.2rem !important",
                    "padding-right": "2rem"
                  }
                },
                ".navbar-logo": {
                  "font-size": "4rem",
                  "transition": "font-size 0.25s",
                  "& img": {
                    "display": "flex"
                  },
                  ".mbr-iconfont": {
                    "transition": "font-size 0.25s"
                  }
                }
              }
            },
            ".navbar-toggleable-sm .navbar-collapse": {
              "justify-content": "flex-end",
              "-webkit-justify-content": "flex-end",
              "padding-right": "5rem",
              "width": "auto",
              ".navbar-nav": {
                "flex-wrap": "wrap",
                "-webkit-flex-wrap": "wrap",
                "padding-left": "0",
                ".nav-item": {
                  "-webkit-align-self": "center",
                  "align-self": "center"
                }
              },
              ".navbar-buttons": {
                "padding-left": "0",
                "padding-bottom": "0"
              }
            },
            ".dropdown": {
              ".dropdown-menu": {
                "background": "@menuBgColor",
                "display": "none",
                "position": "absolute",
                "min-width": "5rem",
                "padding-top": "1.4rem",
                "padding-bottom": "1.4rem",
                "text-align": "left",
                ".dropdown-item": {
                  "width": "auto",
                  "padding": "0.235em 1.5385em 0.235em 1.5385em !important",
                  "&::after": {
                    "right": "0.5rem"
                  }
                },
                ".dropdown-submenu": {
                  "margin": "0"
                }
              },
              "&.open > .dropdown-menu": {
                "display": "block"
              }
            },
            ".navbar-toggleable-sm": {
              "&.opened:after": {
                "position": "absolute",
                "width": "100vw",
                "height": "100vh",
                "content": "''",
                "background-color": "rgba(0, 0, 0, 0.1)",
                "left": "0",
                "bottom": "0",
                "transform": "translateY(100%)",
                "-webkit-transform": "translateY(100%)",
                "z-index": "1000"
              }
            },
            ".navbar.navbar-short": {
              "min-height": "60px",
              "transition": "all .2s",
              "& .navbar-toggler-right": {
                "top": "20px"
              },
              "& .navbar-logo a": {
                "font-size": "2.5rem !important",
                "line-height": "2.5rem",
                "transition": "font-size 0.25s",
                "& .mbr-iconfont": {
                  "font-size": "2.5rem !important"
                },
                "& img": {
                  "height": "3rem !important"
                }
              },
              "& .navbar-brand": {
                "min-height": "3rem"
              }
            },
            "button.navbar-toggler": {
              "width": "31px",
              "height": "18px",
              "cursor": "pointer",
              "transition": "all .2s",
              "top": "1.5rem",
              "right": "1rem",
              "&:focus": {
                "outline": "none"
              },
              ".hamburger span": {
                "position": "absolute",
                "right": "0",
                "width": "30px",
                "height": "2px",
                "border-right": "5px",
                "background-color": "@hamburgerColor",
                "&:nth-child(1)": {
                  "top": "0",
                  "transition": "all .2s"
                },
                "&:nth-child(2)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(3)": {
                  "top": "8px",
                  "transition": "all .15s"
                },
                "&:nth-child(4)": {
                  "top": "16px",
                  "transition": "all .2s"
                }
              }
            },
            "nav.opened .hamburger span": {
              "&:nth-child(1)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              },
              "&:nth-child(2)": {
                "-webkit-transform": "rotate(45deg)",
                "transform": "rotate(45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(3)": {
                "-webkit-transform": "rotate(-45deg)",
                "transform": "rotate(-45deg)",
                "transition": "all .25s"
              },
              "&:nth-child(4)": {
                "top": "8px",
                "width": "0",
                "opacity": "0",
                "right": "50%",
                "transition": "all .2s"
              }
            },
            ".collapsed": {
              "&.navbar-expand": {
                "flex-direction": "column"
              },
              ".btn": {
                "display": "flex"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (max-width: 991px)": {
              ".navbar-expand": {
                "flex-direction": "column"
              },
              "img": {
                "height": "3.8rem !important"
              },
              ".btn": {
                "display": "flex"
              },
              "button.navbar-toggler": {
                "display": "block"
              },
              ".navbar-brand": {
                "margin-left": "1rem !important"
              },
              ".navbar-toggleable-sm": {
                "flex-direction": "column",
                "-webkit-flex-direction": "column"
              },
              ".navbar-collapse": {
                "display": "none !important",
                "padding-right": "0 !important",
                "&.collapsing,&.show": {
                  "display": "block !important",
                  ".navbar-nav": {
                    "display": "block",
                    "text-align": "center",
                    ".nav-item": {
                      "clear": "both",
                      "& when (@showButtons = false)": {
                        "&:last-child": {
                          "margin-bottom": "1rem"
                        }
                      }
                    }
                  },
                  ".navbar-buttons": {
                    "text-align": "center",
                    "&:last-child": {
                      "margin-bottom": "1rem"
                    }
                  }
                }
              },
              ".dropdown": {
                ".dropdown-menu": {
                  "width": "100%",
                  "text-align": "center",
                  "position": "relative",
                  "opacity": "0",
                  "display": "block",
                  "height": "0",
                  "visibility": "hidden",
                  "padding": "0",
                  "transition-duration": ".5s",
                  "transition-property": "opacity,padding,height"
                },
                "&.open > .dropdown-menu": {
                  "position": "relative",
                  "opacity": "1",
                  "height": "auto",
                  "padding": "1.4rem 0",
                  "visibility": "visible"
                },
                ".dropdown-submenu": {
                  "left": "0",
                  "text-align": "center",
                  "width": "100%"
                },
                ".dropdown-toggle[data-toggle=\"dropdown-submenu\"]::after": {
                  "margin-top": "0",
                  "position": "inherit",
                  "right": "0",
                  "top": "50%",
                  "display": "inline-block",
                  "width": "0",
                  "height": "0",
                  "margin-left": ".3em",
                  "vertical-align": "middle",
                  "content": "\"\"",
                  "border-top": ".30em solid",
                  "border-right": ".30em solid transparent",
                  "border-left": ".30em solid transparent"
                }
              }
            },
            "@media (min-width: 767px)": {
              ".menu-logo": {
                "flex-shrink": "0"
              }
            },
            ".navbar-collapse": {
              "flex-basis": "auto"
            },
            ".nav-link:hover, .dropdown-item:hover": {
              "color": "@itemsHoverColor !important"
            }
          },
          "_cid": "qKXgHenCD7",
          "_anchor": "menu1-u",
          "_protectedParams": [],
          "_global": true,
          "_once": "menu",
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            }
          },
          "_name": "content5",
          "_customHTML": "<section class=\"mbr-section content5\" group=\"Article\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"8\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"5\">\n\n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubtitle\" checked>\n        <input type=\"checkbox\" title=\"Show Text\" name=\"showText\">\n        <input type=\"checkbox\" title=\"Show Buttons\" name=\"showButtons\">\n\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"@PROJECT_PATH@/assets/images/mbr-6-1620x1080.jpg\" selected parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#0f7699\">\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\" checked>\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#232323\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.4\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type !== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row\">\n            <div class=\"title col-12 col-md-8\">\n                <h2 mbr-if=\"showTitle\" class=\"align-center mbr-bold mbr-white pb-3 mbr-fonts-style\" mbr-theme-style=\"display-1\">\n                    <br>PORTFÓLIO</h2>\n                <h3 mbr-if=\"showSubtitle\" class=\"mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style\" mbr-theme-style=\"display-5\" data-app-selector=\".mbr-section-subtitle\">A little bit of what I did...</h3>\n                <p class=\"mbr-text align-center mbr-white pb-3 mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".mbr-text\" mbr-if=\"showText\" mbr-article data-multiline>\n                    Shape your future web project with sharp design and refine coded functions\n                </p>\n                <div class=\"mbr-section-btn align-center\" mbr-if=\"showButtons\" mbr-buttons mbr-theme-style=\"display-4\" data-toolbar=\"-mbrBtnMove\">\n                    <a class=\"btn btn-primary\" href=\"https://mobirise.com\">LEARN MORE</a>\n                    <a class=\"btn btn-white-outline\" href=\"https://mobirise.com\">LIVE DEMO</a>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_cid": "qOaPzOmY5I",
          "_anchor": "content5-v",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "& when not (@fullScreen)": {
              "padding-top": "(@paddingTop * 15px)",
              "padding-bottom": "(@paddingBottom * 15px)"
            },
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value",
              "& when (@gradientBg)": {
                "background": "linear-gradient(45deg, @bg-value, @color2)"
              }
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "& when (@reverseContent)": {
              ".media-container-row": {
                "flex-direction": "row-reverse"
              }
            },
            ".mbr-figure": {
              "@media (min-width: 992px)": {
                "padding-right": "4rem",
                "& when (@reverseContent)": {
                  "padding-right": "0",
                  "padding-left": "4rem"
                }
              },
              "@media (max-width: 991px)": {
                "padding-bottom": "3rem"
              }
            },
            ".mbr-text": {
              "@media (max-width: 767px)": {
                "text-align": "center"
              }
            },
            "H1": {
              "color": "#001471"
            },
            ".mbr-text, .mbr-section-btn": {
              "color": "#767676"
            }
          },
          "_name": "header3",
          "_customHTML": "<section class=\"header3\" group=\"Headers\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-fullscreen': fullScreen,\n                    'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"checkbox\" title=\"Full Screen\" name=\"fullScreen\">\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"6\" condition=\"fullScreen == false\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"6\" condition=\"fullScreen == false\">\n    \n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubTitle\">\n        <input type=\"checkbox\" title=\"Show Text\" name=\"showText\" checked>\n        <input type=\"checkbox\" title=\"Show Buttons\" name=\"showButtons\">\n        <input type=\"range\" inline title=\"Media Size\" name=\"mediaSize\" min=\"10\" max=\"200\" step=\"5\" value=\"100\">\n        <input type=\"checkbox\" title=\"Media On Left/Right\" name=\"reverseContent\">\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/background4.jpg\" parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#ccf2ff\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n\n        <input type=\"checkbox\" title=\"Gradient\" name=\"gradientBg\" condition=\"bg.type == 'color'\" checked>\n        <input type=\"color\" title=\"Color 2\" name=\"color2\" value=\"#ffffff\" condition=\"gradientBg\">\n        \n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#000000\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.2\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row\">\n            <div class=\"mbr-figure\" mbr-style=\"{'width': mediaSize + '%'}\">\n                <img src=\"@PROJECT_PATH@/assets/images/sem-ttulo-1920x1080.png\" alt=\"Mobirise\" title>\n            </div>\n\n            <div class=\"media-content\">\n                <h1 class=\"mbr-section-title mbr-white pb-3 mbr-fonts-style\" mbr-if=\"showTitle\" mbr-theme-style=\"display-1\"><b>\n                    Blanche</b>Turismo</h1>\n                <h3 class=\"mbr-section-subtitle align-left mbr-white mbr-light pb-3 mbr-fonts-style\" mbr-if=\"showSubTitle\" mbr-theme-style=\"display-2\">\n                    Beautiful mobile websites\n                </h3>\n                <div class=\"mbr-section-text mbr-white pb-3 \">\n                    <p class=\"mbr-text mbr-fonts-style\" mbr-if=\"showText\" data-app-selector=\".mbr-text, .mbr-section-btn\" mbr-theme-style=\"display-5\">A <b>Blanche Turismo</b> é uma empresa de transporte rodoviário. O site institucional da <b>Blanche </b>foi desenvolvido a fim de expor a frota de veículos, estrutura da empresa e pacotes turísticos.<br><br>O site pode ser visitado <a href=\"https://www.blancheturismo.com\" target=\"_blank\">aqui</a>.</p>\n                </div>\n                <div class=\"mbr-section-btn\" mbr-if=\"showButtons\" data-toolbar=\"-mbrBtnMove\" mbr-buttons mbr-theme-style=\"display-4\"><a class=\"btn btn-md btn-primary\" href=\"https://mobirise.com\">LEARN MORE</a>\n                    <a class=\"btn btn-md btn-primary-outline\" href=\"https://mobirise.com\">LIVE DEMO</a></div>\n            </div>\n        </div>\n    </div>\n\n</section>",
          "_cid": "qOaRh99uXx",
          "_anchor": "header3-w",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "& when not (@fullScreen)": {
              "padding-top": "(@paddingTop * 15px)",
              "padding-bottom": "(@paddingBottom * 15px)"
            },
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value",
              "& when (@gradientBg)": {
                "background": "linear-gradient(45deg, @bg-value, @color2)"
              }
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "& when (@reverseContent)": {
              ".media-container-row": {
                "flex-direction": "row-reverse"
              }
            },
            ".mbr-figure": {
              "@media (min-width: 992px)": {
                "padding-right": "4rem",
                "& when (@reverseContent)": {
                  "padding-right": "0",
                  "padding-left": "4rem"
                }
              },
              "@media (max-width: 991px)": {
                "padding-bottom": "3rem"
              }
            },
            ".mbr-text": {
              "@media (max-width: 767px)": {
                "text-align": "center"
              }
            },
            "B": {
              "color": "#f8f8f8"
            },
            "H1": {
              "color": "#f8f8f8"
            }
          },
          "_name": "header3",
          "_customHTML": "<section class=\"header3\" group=\"Headers\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-fullscreen': fullScreen,\n                    'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"checkbox\" title=\"Full Screen\" name=\"fullScreen\">\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"6\" condition=\"fullScreen == false\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"6\" condition=\"fullScreen == false\">\n    \n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubTitle\">\n        <input type=\"checkbox\" title=\"Show Text\" name=\"showText\" checked>\n        <input type=\"checkbox\" title=\"Show Buttons\" name=\"showButtons\">\n        <input type=\"range\" inline title=\"Media Size\" name=\"mediaSize\" min=\"10\" max=\"200\" step=\"5\" value=\"100\">\n        <input type=\"checkbox\" title=\"Media On Left/Right\" name=\"reverseContent\" checked>\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/background4.jpg\" parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#00711c\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n\n        <input type=\"checkbox\" title=\"Gradient\" name=\"gradientBg\" condition=\"bg.type == 'color'\" checked>\n        <input type=\"color\" title=\"Color 2\" name=\"color2\" value=\"#ff0040\" condition=\"gradientBg\">\n        \n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#000000\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.2\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row\">\n            <div class=\"mbr-figure\" mbr-style=\"{'width': mediaSize + '%'}\">\n                <img src=\"@PROJECT_PATH@/assets/images/tre-1-1920x1080.png\" alt=\"Mobirise\" title>\n            </div>\n\n            <div class=\"media-content\">\n                <h1 class=\"mbr-section-title mbr-white pb-3 mbr-fonts-style\" mbr-if=\"showTitle\" mbr-theme-style=\"display-1\"><b>\n                    Pizzaria</b>Treviso</h1>\n                <h3 class=\"mbr-section-subtitle align-left mbr-white mbr-light pb-3 mbr-fonts-style\" mbr-if=\"showSubTitle\" mbr-theme-style=\"display-2\">\n                    Beautiful mobile websites\n                </h3>\n                <div class=\"mbr-section-text mbr-white pb-3 \">\n                    <p class=\"mbr-text mbr-fonts-style\" mbr-if=\"showText\" data-app-selector=\".mbr-text, .mbr-section-btn\" mbr-theme-style=\"display-5\">Local referência em pizzas e lanches na região sul de Curitiba. O objetivo do site é dispor de um cardápio online para seus clientes, além de um sistema de pedido digital.<br><br>O site está publicado e pode ser visitado <a href=\"https://www.pizzariatreviso.com\" target=\"_blank\">aqui</a>.</p>\n                </div>\n                <div class=\"mbr-section-btn\" mbr-if=\"showButtons\" data-toolbar=\"-mbrBtnMove\" mbr-buttons mbr-theme-style=\"display-4\">\n                    <a class=\"btn btn-md btn-primary\" href=\"https://mobirise.com\">LEARN MORE</a>\n                    <a class=\"btn btn-md btn-white-outline\" href=\"https://mobirise.com\">LIVE DEMO</a>\n                </div>\n            </div>\n        </div>\n    </div>\n\n</section>",
          "_cid": "qOb5MltJ4j",
          "_anchor": "header3-x",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "& when not (@fullScreen)": {
              "padding-top": "(@paddingTop * 15px)",
              "padding-bottom": "(@paddingBottom * 15px)"
            },
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value",
              "& when (@gradientBg)": {
                "background": "linear-gradient(45deg, @bg-value, @color2)"
              }
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "& when (@reverseContent)": {
              ".media-container-row": {
                "flex-direction": "row-reverse"
              }
            },
            ".mbr-figure": {
              "@media (min-width: 992px)": {
                "padding-right": "4rem",
                "& when (@reverseContent)": {
                  "padding-right": "0",
                  "padding-left": "4rem"
                }
              },
              "@media (max-width: 991px)": {
                "padding-bottom": "3rem"
              }
            },
            ".mbr-text": {
              "@media (max-width: 767px)": {
                "text-align": "center"
              }
            },
            "B": {
              "color": "#073b4c"
            },
            "H1": {
              "color": "#073b4c"
            }
          },
          "_name": "header3",
          "_customHTML": "<section class=\"header3\" group=\"Headers\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-fullscreen': fullScreen,\n                    'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"checkbox\" title=\"Full Screen\" name=\"fullScreen\">\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"6\" condition=\"fullScreen == false\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"6\" condition=\"fullScreen == false\">\n    \n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubTitle\">\n        <input type=\"checkbox\" title=\"Show Text\" name=\"showText\" checked>\n        <input type=\"checkbox\" title=\"Show Buttons\" name=\"showButtons\">\n        <input type=\"range\" inline title=\"Media Size\" name=\"mediaSize\" min=\"10\" max=\"200\" step=\"5\" value=\"100\">\n        <input type=\"checkbox\" title=\"Media On Left/Right\" name=\"reverseContent\">\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/background4.jpg\" parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#073b4c\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n\n        <input type=\"checkbox\" title=\"Gradient\" name=\"gradientBg\" condition=\"bg.type == 'color'\" checked>\n        <input type=\"color\" title=\"Color 2\" name=\"color2\" value=\"#e7e7e7\" condition=\"gradientBg\">\n        \n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#000000\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.2\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row\">\n            <div class=\"mbr-figure\" mbr-style=\"{'width': mediaSize + '%'}\">\n                <img src=\"@PROJECT_PATH@/assets/images/llsem-ttulo-1920x1080.png\" alt=\"Mobirise\" title>\n            </div>\n\n            <div class=\"media-content\">\n                <h1 class=\"mbr-section-title mbr-white pb-3 mbr-fonts-style\" mbr-if=\"showTitle\" mbr-theme-style=\"display-1\"><b>\n                    Legis</b>Dei</h1>\n                <h3 class=\"mbr-section-subtitle align-left mbr-white mbr-light pb-3 mbr-fonts-style\" mbr-if=\"showSubTitle\" mbr-theme-style=\"display-2\">\n                    Beautiful mobile websites\n                </h3>\n                <div class=\"mbr-section-text mbr-white pb-3 \">\n                    <p class=\"mbr-text mbr-fonts-style\" mbr-if=\"showText\" data-app-selector=\".mbr-text, .mbr-section-btn\" mbr-theme-style=\"display-5\">Grande empresa de consultoria tributária no Brasil e no exterior. Esse site visa expor a seriedade e estrutura da empresa além de possuir um CRM interno completo e online para gestão de vendas.<br><br>O site pode ser visto <a href=\"https://www.legisdei.com.br\" target=\"_blank\" class=\"text-black\">aqui</a>.</p>\n                </div>\n                <div class=\"mbr-section-btn\" mbr-if=\"showButtons\" data-toolbar=\"-mbrBtnMove\" mbr-buttons mbr-theme-style=\"display-4\">\n                    <a class=\"btn btn-md btn-primary\" href=\"https://mobirise.com\">LEARN MORE</a>\n                    <a class=\"btn btn-md btn-white-outline\" href=\"https://mobirise.com\">LIVE DEMO</a>\n                </div>\n            </div>\n        </div>\n    </div>\n\n</section>",
          "_cid": "qOb8fn7oTa",
          "_anchor": "header3-y",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "& when not (@fullScreen)": {
              "padding-top": "(@paddingTop * 15px)",
              "padding-bottom": "(@paddingBottom * 15px)"
            },
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value",
              "& when (@gradientBg)": {
                "background": "linear-gradient(45deg, @bg-value, @color2)"
              }
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "& when (@reverseContent)": {
              ".media-container-row": {
                "flex-direction": "row-reverse"
              }
            },
            ".mbr-figure": {
              "@media (min-width: 992px)": {
                "padding-right": "4rem",
                "& when (@reverseContent)": {
                  "padding-right": "0",
                  "padding-left": "4rem"
                }
              },
              "@media (max-width: 991px)": {
                "padding-bottom": "3rem"
              }
            },
            ".mbr-text": {
              "@media (max-width: 767px)": {
                "text-align": "center"
              }
            },
            "H1": {
              "color": "#ff0040"
            },
            "B": {
              "color": "#ff0040"
            },
            ".mbr-text, .mbr-section-btn": {
              "color": "#639770"
            }
          },
          "_name": "header3",
          "_customHTML": "<section class=\"header3\" group=\"Headers\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-fullscreen': fullScreen,\n                    'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"checkbox\" title=\"Full Screen\" name=\"fullScreen\">\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"6\" condition=\"fullScreen == false\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"6\" condition=\"fullScreen == false\">\n    \n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Subtitle\" name=\"showSubTitle\">\n        <input type=\"checkbox\" title=\"Show Text\" name=\"showText\" checked>\n        <input type=\"checkbox\" title=\"Show Buttons\" name=\"showButtons\">\n        <input type=\"range\" inline title=\"Media Size\" name=\"mediaSize\" min=\"10\" max=\"200\" step=\"5\" value=\"105\">\n        <input type=\"checkbox\" title=\"Media On Left/Right\" name=\"reverseContent\" checked>\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/background4.jpg\" parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#f8f8f8\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset>\n\n        <input type=\"checkbox\" title=\"Gradient\" name=\"gradientBg\" condition=\"bg.type == 'color'\" checked>\n        <input type=\"color\" title=\"Color 2\" name=\"color2\" value=\"#f9f295\" condition=\"gradientBg\">\n        \n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#000000\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.2\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row\">\n            <div class=\"mbr-figure\" mbr-style=\"{'width': mediaSize + '%'}\">\n                <img src=\"@PROJECT_PATH@/assets/images/sem-ttulorc-1904x1037.png\" alt=\"Mobirise\" title>\n            </div>\n\n            <div class=\"media-content\">\n                <h1 class=\"mbr-section-title mbr-white pb-3 mbr-fonts-style\" mbr-if=\"showTitle\" mbr-theme-style=\"display-1\">Portal<b>RC</b></h1>\n                <h3 class=\"mbr-section-subtitle align-left mbr-white mbr-light pb-3 mbr-fonts-style\" mbr-if=\"showSubTitle\" mbr-theme-style=\"display-2\">\n                    Beautiful mobile websites\n                </h3>\n                <div class=\"mbr-section-text mbr-white pb-3 \">\n                    <p class=\"mbr-text mbr-fonts-style\" mbr-if=\"showText\" data-app-selector=\".mbr-text, .mbr-section-btn\" mbr-theme-style=\"display-5\">\n                        Um portal sem fins lucrativos desenvolvido em parceria com a <b>Reciclagem Capital</b>, a maior recicladora de materiais do Paraná. O portal é um sistema gratuito de vendas online aberto para todas as empresas e pessoas que buscam comprar ou vender produtos para reciclagem.<br><br>O projeto ainda está em andamento, mas uma parte dele pode ser vista <a href=\"https://alissonpelizaro.000webhostapp.com/\" target=\"_blank\" class=\"text-secondary\">aqui</a>.</p>\n                </div>\n                <div class=\"mbr-section-btn\" mbr-if=\"showButtons\" data-toolbar=\"-mbrBtnMove\" mbr-buttons mbr-theme-style=\"display-4\">\n                    <a class=\"btn btn-md btn-primary\" href=\"https://mobirise.com\">LEARN MORE</a>\n                    <a class=\"btn btn-md btn-white-outline\" href=\"https://mobirise.com\">LIVE DEMO</a>\n                </div>\n            </div>\n        </div>\n    </div>\n\n</section>",
          "_cid": "qObaaAyNjb",
          "_anchor": "header3-z",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "h4": {
              "text-align": "left",
              "font-weight": "500"
            },
            "p": {
              "color": "#767676",
              "text-align": "left",
              "margin-bottom": "0"
            },
            ".card-img": {
              "text-align": "left",
              "-webkit-flex": "1 0 auto",
              "flex": "1 0 auto",
              "width": "auto"
            },
            ".card-img span": {
              "font-size": "72px",
              "color": "rgb(255, 51, 102)"
            },
            ".card-box": {
              "padding-left": "1rem",
              "word-break": "break-word"
            },
            "@media (max-width: 991px)": {
              ".card-img": {
                "text-align": "left",
                "padding-bottom": "0.75rem"
              },
              ".card-box": {
                "padding-left": "0"
              }
            },
            ".card-title, .card-img": {
              "color": "#767676"
            }
          },
          "_name": "features9",
          "_customHTML": "<section class=\"features9\" group=\"Features\" data-bg-video=\"{{bg.type == 'video' && bg.value.url}}\" mbr-class=\"{'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->\n        <input type=\"range\" inline title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"9\" step=\"1\" value=\"6\">\n        <input type=\"range\" inline title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"9\" step=\"1\" value=\"6\">\n\n        <input type=\"checkbox\" title=\"Show Title\" name=\"showTitle\" checked>\n        <input type=\"checkbox\" title=\"Show Text\" name=\"showText\" checked>\n        <select title=\"Cards\" name=\"cardsAmount\">\n            <option value=\"1\" selected>1</option>\n            <option value=\"2\">2</option>\n            <option value=\"3\">3</option>\n            <option value=\"4\">4</option>\n        </select>\n\n        <fieldset type=\"background\" name=\"bg\" parallax>\n            <input type=\"image\" title=\"Background Image\" value=\"../_images/background2.jpg\" parallax>\n            <input type=\"color\" title=\"Background Color\" value=\"#f9f9f9\" selected>\n            <input type=\"video\" title=\"Background Video\" value=\"http://www.youtube.com/watch?v=uNCr7NdOJgw\">\n        </fieldset> \n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#efefef\" condition=\"overlay && bg.type !== 'color'\">\n        <input type=\"range\" inline title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.8\" condition=\"overlay && bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay && bg.type!== 'color'\" mbr-style=\"{'opacity': overlayOpacity, 'background-color': overlayColor}\">\n    </div>\n    <div class=\"container\">\n        <div class=\"row justify-content-center\">\n            <div class=\"card p-3 col-12 col-md-6\" mbr-class=\"{'col-lg-3': cardsAmount == '4',\n                             'col-lg-4': cardsAmount == '3'}\">\n                <div class=\"media-container-row\">\n                    <div class=\"card-img pr-2\">\n                        <span mbr-icon class=\"mbr-iconfont mbri-quote-left\" style=\"color: rgb(114, 171, 190);\"></span>\n                    </div>\n                    <div class=\"card-box\">\n                        <h4 class=\"card-title py-3 mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showTitle\" data-app-selector=\".card-title, .card-img\"><b>\n                            Raquel Cordeiro </b>via <b><a href=\"https://www.linkedin.com/in/alisson-pelizaro/\" target=\"_blank\">LinkedIn</a></b></h4>\n                        <p class=\"mbr-text mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showText\"><i>O Alisson é um profissional extremamente comprometido, capaz de resolver problemas com muita agilidade e competência.\nSabe se relacionar muito bem em equipe, além de ser brilhante em todo o processo de entrega de qualquer projeto.\nMuito dedicado. Recomendo fortemente.</i></p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"card p-3 col-12 col-md-6\" mbr-if=\"cardsAmount > 1\" mbr-class=\"{'col-lg-3': cardsAmount == '4',\n                             'col-lg-4': cardsAmount == '3'}\">\n                <div class=\"media-container-row\">\n                    <div class=\"card-img pr-2\">\n                        <span mbr-icon class=\"mbri-star mbr-iconfont\"></span>\n                    </div>\n                    <div class=\"card-box\">\n                        <h4 class=\"card-title py-3 mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showTitle\" data-app-selector=\".card-title, .card-img\">\n                            Mobile Friendly\n                        </h4>\n                        <p class=\"mbr-text mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showText\">\n                           All sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site.\n                        </p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"card p-3 col-12 col-md-6\" mbr-if=\"cardsAmount > 2\" mbr-class=\"{'col-lg-3': cardsAmount == '4',\n                             'col-lg-4': cardsAmount == '3'}\">\n                <div class=\"media-container-row\">\n                    <div class=\"card-img pr-2\">\n                        <span mbr-icon class=\"mbri-desktop mbr-iconfont\"></span>\n                    </div>\n                    <div class=\"card-box\">\n                        <h4 class=\"card-title py-3 mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showTitle\" data-app-selector=\".card-title, .card-img\">\n                            Unique Styles\n                        </h4>\n                        <p class=\"mbr-text mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showText\">\n                           Mobirise offers many site blocks in several themes, and though these blocks are pre-made, they are flexible.\n                        </p>\n                    </div>\n                </div>\n            </div>\n\n            <div class=\"card p-3 col-12 col-md-6\" mbr-if=\"cardsAmount > 3\" mbr-class=\"{'col-lg-3': cardsAmount == '4',\n                             'col-lg-4': cardsAmount == '3'}\">\n                <div class=\"media-container-row\">\n                    <div class=\"card-img pr-2\">\n                        <span mbr-icon class=\"mbri-touch mbr-iconfont\"></span>\n                    </div>\n                    <div class=\"card-box\">\n                        <h4 class=\"card-title py-3 mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showTitle\" data-app-selector=\".card-title, .card-img\">\n                            Unlimited Sites\n                        </h4>\n                        <p class=\"mbr-text mbr-fonts-style\" mbr-theme-style=\"display-7\" mbr-if=\"showText\">\n                           Mobirise gives you the freedom to develop as many websites as you like given the fact that it is a desktop app.\n                        </p>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_cid": "qObew50rV1",
          "_anchor": "features9-10",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        },
        {
          "_styles": {
            "padding-top": "(@paddingTop * 15px)",
            "padding-bottom": "(@paddingBottom * 15px)",
            "& when (@bg-type = 'image')": {
              "background-image": "url(@bg-value)"
            },
            "& when (@bg-type = 'color')": {
              "background-color": "@bg-value"
            },
            ".content": {
              "@media (max-width: 767px)": {
                "text-align": "center",
                "> div:not(:last-child)": {
                  "margin-bottom": "2rem"
                }
              }
            },
            ".media-wrap": {
              "@media (max-width: 767px)": {
                "margin-bottom": "1rem"
              },
              ".mbr-iconfont-logo": {
                "font-size": "7.5rem",
                "color": "#f36"
              },
              "img": {
                "height": "6rem"
              }
            },
            ".footer-lower": {
              ".copyright": {
                "@media (max-width: 767px)": {
                  "margin-bottom": "1rem",
                  "text-align": "center"
                }
              },
              "hr": {
                "margin": "1rem 0",
                "border-color": "#fff",
                "opacity": ".05"
              },
              ".social-list": {
                "padding-left": "0",
                "margin-bottom": "0",
                "list-style": "none",
                "display": "flex",
                "flex-wrap": "wrap",
                "justify-content": "flex-end",
                "-webkit-justify-content": "flex-end",
                ".mbr-iconfont-social": {
                  "font-size": "1.3rem",
                  "color": "#fff"
                },
                ".soc-item": {
                  "margin": "0 .5rem"
                },
                "a": {
                  "margin": "0",
                  "opacity": ".5",
                  "-webkit-transition": ".2s linear",
                  "transition": ".2s linear",
                  "&:hover": {
                    "opacity": "1"
                  }
                },
                "@media (max-width: 767px)": {
                  "justify-content": "center",
                  "-webkit-justify-content": "center"
                }
              }
            },
            "I": {
              "color": "#cccccc"
            }
          },
          "_name": "footer1",
          "_customHTML": "<section group=\"Footers\" mbr-class=\"{'mbr-reveal': reveal, 'mbr-parallax-background': bg.parallax}\">\n\n    <mbr-parameters>\n    <!-- Block parameters controls (Blue \"Gear\" panel) -->  \n        <input type=\"range\" inline=\"\" title=\"Top\" name=\"paddingTop\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"range\" inline=\"\" title=\"Bottom\" name=\"paddingBottom\" min=\"0\" max=\"8\" step=\"1\" value=\"4\">\n        <input type=\"checkbox\" title=\"Show Copyright\" name=\"showCopyright\" checked=\"\">\n        <select title=\"Icons\" name=\"iconsCount\">\n            <option value=\"0\">0</option>\n            <option value=\"1\">1</option>\n            <option value=\"2\">2</option>\n            <option value=\"3\">3</option>\n            <option value=\"4\">4</option>\n            <option value=\"5\">5</option>\n            <option value=\"6\" selected=\"\">6</option>\n        </select>\n        <input type=\"checkbox\" title=\"Reveal effect\" name=\"reveal\" checked=\"\">\n        <fieldset type=\"background\" name=\"bg\" parallax=\"\">\n            <input type=\"image\" title=\"Background Image\" value=\"@PROJECT_PATH@/assets/images/jumbotron.jpg\">\n            <input type=\"color\" title=\"Background Color\" value=\"#2e2e2e\" selected=\"\">\n        </fieldset>\n        <input type=\"checkbox\" title=\"Overlay\" name=\"overlay\" condition=\"bg.type !== 'color'\" checked=\"\">\n        <input type=\"color\" title=\"Overlay Color\" name=\"overlayColor\" value=\"#3C3C3C\" condition=\"overlay &amp;&amp; bg.type !== 'color'\">\n        <input type=\"range\" inline=\"\" title=\"Opacity\" name=\"overlayOpacity\" min=\"0\" max=\"1\" step=\"0.1\" value=\"0.5\" condition=\"overlay &amp;&amp; bg.type !== 'color'\">\n    <!-- End block parameters -->\n    </mbr-parameters>\n\n    <div class=\"mbr-overlay\" mbr-if=\"overlay &amp;&amp; bg.type !== 'color'\" opacity=\"{{overlayOpacity}}\" bg-color=\"{{overlayColor}}\"></div>\n\n    <div class=\"container\">\n        <div class=\"media-container-row content text-white\">\n            <div class=\"col-12 col-md-3\">\n                <div class=\"media-wrap\">\n                    <a href=\"https://mobirise.com/\">\n                        <img src=\"@PROJECT_PATH@/assets/images/imagem1-512x512.png\" alt=\"Mobirise\" title=\"\">\n                    </a>\n                </div>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\"></h5>\n                <p class=\"mbr-text\"></p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Contato</h5>\n                <p class=\"mbr-text\"><i>\n                    Email</i>: alissonpelizaro@hotmail.com\n<br><i>Celular:<br></i>+55 (41) 9 9147-0618</p>\n            </div>\n            <div class=\"col-12 col-md-3 mbr-fonts-style\" mbr-theme-style=\"display-7\">\n                <h5 class=\"pb-3\">\n                    Mapa do site</h5>\n                <p class=\"mbr-text\">\n                    <a class=\"text-primary\" href=\"index.html\">Bem-vindo\n</a><br><a href=\"blog.html\">Blog</a><br><a href=\"portfolio.html\">Portfólio</a><br><a href=\"trajeto.html\">Meu trajeto</a><br><a href=\"contato.html\">Contato</a><br></p>\n            </div>\n        </div>\n        <div class=\"footer-lower\" mbr-if=\"showCopyright\">\n            <div class=\"media-container-row\">\n                <div class=\"col-sm-12\">\n                    <hr>\n                </div>\n            </div>\n            <div class=\"media-container-row mbr-white\">\n                <div class=\"col-sm-6 copyright\">\n                    <p class=\"mbr-text mbr-fonts-style\" mbr-theme-style=\"display-7\" data-app-selector=\".copyright > p\">\n                        © Copyright 2018 - Todos os direitos reservados</p>\n                </div>\n                <div class=\"col-md-6\">\n                    <div class=\"social-list align-right\" mbr-if=\"iconsCount > 0\">\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>0\">\n                            <a href=\"https://twitter.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-twitter socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>1\">\n                            <a href=\"https://www.facebook.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-facebook socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>2\">\n                            <a href=\"https://github.com/alissonpelizaro\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-github socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>3\">\n                            <a href=\"https://instagram.com/alhooroots\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-instagram socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>4\">\n                            <a href=\"https://www.linkedin.com/in/alisson-pelizaro/\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-linkedin socicon\"></span>\n                            </a>\n                        </div>\n                        <div class=\"soc-item\" mbr-if=\"iconsCount>5\">\n                            <a href=\"https://pt.stackoverflow.com/users/99799/alisson-pelizaro\" target=\"_blank\">\n                                <span mbr-icon=\"\" class=\"mbr-iconfont mbr-iconfont-social socicon-stackoverflow socicon\"></span>\n                            </a>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>",
          "_anchor": "footer1-1w",
          "_isUserblock": true,
          "_cid": "qObHVLDtTl",
          "_protectedParams": [],
          "_global": false,
          "_once": false,
          "_params": {}
        }
      ]
    }
  }
}
